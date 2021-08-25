<template>
    <div>
        <section id="page-title" class="page-title-classic">
            <div class="container">
                <div class="page-title">
                    <h1>เพิ่มข่าวสาร</h1>

                    <!-- <span>Inspiration comes of working every day.</span> -->
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="/">หน้าแรก</a>
                        </li>
                        <li><a>เพิ่มข่าวสาร</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-9">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"
                                    >หัวเรื่อง</label
                                >
                                <input
                                    v-model="content.title"
                                    type="text"
                                    class="form-control"
                                    name="username"
                                />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"
                                    >หมวดหมู่</label
                                >
                                <select
                                    class="form-select"
                                    id="cars"
                                    v-model="content.type"
                                >
                                    <optgroup
                                        v-for="(optionCate,
                                        indexCate) in optionCates"
                                        :key="indexCate"
                                        :label="optionCate.name"
                                    >
                                        <option
                                            v-for="(optionSubCate,
                                            indexSub) in optionSubCates"
                                            :key="indexSub"
                                            :value="optionSubCate.id"
                                        >
                                            <div
                                                v-if="
                                                    optionSubCate.category_id ==
                                                        optionCate.id
                                                "
                                            >
                                                {{ optionSubCate.name }}
                                            </div>
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"
                                    >เพิ่มรูปภาพ</label
                                >
                                <input
                                    type="file"
                                    class="form-control"
                                    multiple
                                    accept="image/jpeg"
                                    id="upload-img"
                                    @change="changImage"
                                />
                                <!-- <div v-for="(image, key) in images" :key="key">
                                    <img
                                        :src="image.src"
                                        class="preview"
                                        style="width:200px;"
                                    />
                                    {{ image.file.name }}
                                </div> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"
                                    >เพิ่มไฟล์</label
                                >
                                <input
                                    type="file"
                                    class="form-control"
                                    multiple
                                    accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf"
                                    id="upload-file"
                                    @change="changFile"
                                />
                            </div>
                            <div class="form-group">
                                <label for="">รายระเอียด</label>
                                <textarea
                                    name="detail"
                                    class="form-control"
                                ></textarea>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    v-model="showAllTime"
                                    id="exampleCheck1"
                                    type="checkbox"
                                />
                                <label
                                    class="form-check-label"
                                    for="exampleCheck1"
                                    >เผยแพร่ตอนนี้</label
                                >
                            </div>
                            <div v-if="!showAllTime" class="form-group row">
                                <label
                                    for="example-date-input"
                                    class="col-2 col-form-label"
                                    >เผยแพร่วันที่</label
                                >
                                <div class="col-10">
                                    <input
                                        class="form-control"
                                        type="date"
                                        v-model="content.time_show"
                                        value=""
                                        id="example-date-input"
                                    />
                                </div>
                            </div>

                            <button
                                @click.prevent="uploadContent"
                                class="btn btn-primary"
                            >
                                เพิ่มข่าวสาร
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    components: {},
    data() {
        return {
            showAllTime: true,
            content: [],
            optionCates: [],
            optionSubCates: [],
            formImg: new FormData(),
            formFile: new FormData(),
            images: [],
            files: []
        };
    },
    mounted() {
        CKEDITOR.replace("detail");
        axios.get("api/category").then(res => {
            this.optionCates = res.data;
        });
        axios.get("api/sub-category").then(res => {
            this.optionSubCates = res.data;
        });
    },

    methods: {
        changImage(e) {
            let selectedFiles = e.target.files;
            if (!selectedFiles.length) {
                return false;
            }
            for (let i = 0; i < selectedFiles.length; i++) {
                this.images.push(selectedFiles[i]);
            }
        },
        changFile(e) {
            let selectedFiles = e.target.files;
            if (!selectedFiles.length) {
                return false;
            }
            for (let i = 0; i < selectedFiles.length; i++) {
                this.files.push(selectedFiles[i]);
            }
        },
        uploadContent() {
            let fixTime;
            if (this.showAllTime) {
                fixTime = "";
            } else {
                fixTime = this.content.time_show;
            }
            let data = {
                title: this.content.title,
                type: this.content.type,
                time_show: fixTime,
                detail: CKEDITOR.instances.detail.getData()
            };
            // console.log(data)
            axios.post("content", data).then(res => {
                console.log(res.data);
                this.uploadImage(res.data.id);
                this.uploadFile(res.data.id);
                this.$swal.fire({
                    position: "center-center",
                    icon: "success",
                    title: "สำเร็จ",
                    showConfirmButton: false,
                    timer: 1000
                });
                window.location.href = "/";
            });
        },

        uploadImage(content_id) {
            for (let i = 0; i < this.images.length; i++) {
                this.formImg.append("images[]", this.images[i]);
            }
            const config = {
                headers: { "Content-Type": "multipart/form-data" }
            };
            document.getElementById("upload-img").value = [];
            axios
                .post(
                    `api/upload-image?content_id=${content_id}`,
                    this.formImg,
                    config
                )
                .then(response => {
                    //success
                })
                .catch(response => {
                    //error
                });
        },
        uploadFile(content_id) {
            for (let i = 0; i < this.files.length; i++) {
                this.formFile.append("file[]", this.files[i]);
            }
            const config = {
                headers: { "Content-Type": "multipart/form-data" }
            };
            document.getElementById("upload-file").value = [];
            axios
                .post(
                    `api/upload-file?content_id=${content_id}`,
                    this.formFile,
                    config
                )
                .then(response => {
                    //success
                })
                .catch(response => {
                    //error
                });
        }
    }
};
</script>
