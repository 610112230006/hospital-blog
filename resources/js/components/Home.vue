<template lang="">
    <div>
        <section
            id="page-content"
            class="sidebar-right"
            style="transform: none;"
        >
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <!-- post content -->
                    <div class="content col-lg-9">
                        <!-- Page title -->
                        <div class="page-title mb-5">
                            <h1>ข่าวประชาสัมพันธ์ (ล่าสุด)</h1>
                        </div>
                        <!-- end: Page title -->
                        <!-- Blog -->
                        <div id="blog" class="post-thumbnails">
                            <!-- Post item-->
                            <div
                                class="post-item"
                                v-for="newContent in newContents"
                            >
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a
                                            :href="
                                                '/detail-content?id_content=' +
                                                    newContent.id
                                            "
                                        >
                                            <carousel
                                                :perPage="1"
                                                :autoplay="true"
                                                :paginationEnabled="false"
                                                :navigationEnabled="true"
                                                :autoplayHoverPause="true"
                                                :loop="true"
                                                :autoplayTimeout="3000"
                                            >
                                                <slide
                                                    v-for="(newImgContent,
                                                    index) in newImgContents"
                                                    :key="index"
                                                    v-if="
                                                        newContent.id ==
                                                            newImgContent.id_content
                                                    "
                                                >
                                                    <img
                                                        alt=""
                                                        class="img-fluid"
                                                        width="100%"
                                                        :src="
                                                            'storage/' +
                                                                newImgContent.url
                                                        "
                                                    />
                                                </slide>
                                            </carousel>
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date">
                                            <i class="icon-clock"></i
                                            >{{ `${newContent.time_show}, `}}</span
                                        >
                                        <span class="post-meta-date">
                                            <i class="icon-user"></i>ผู้เขียน
                                            {{
                                                `${newContent.f_name} ${newContent.l_name}, `
                                            }}</span
                                        >
                                        <span v-for="statistic in statistics" v-if="statistic.id_content == newContent.id" class="post-meta-date">
                                            <i
                                                class="icon-eye"
                    
                                            ></i
                                            >เข้าชม {{statistic.number_preview}} ครั้ง</span
                                        >
                                        <h2>
                                            <a
                                                :href="
                                                    '/detail-content?id_content=' +
                                                        newContent.id
                                                "
                                                >{{ newContent.title }}
                                            </a>
                                        </h2>

                                        <a
                                            :href="
                                                '/detail-content?id_content=' +
                                                    newContent.id
                                            "
                                            class="item-link"
                                            >อ่านต่อ...
                                            <i class="icon-chevron-right"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                        </div>
                        <!-- end: Blog -->
                        <!-- Pagination -->

                        <!-- end: Pagination -->
                    </div>
                    <!-- end: post content -->
                    <!-- Sidebar-->
                    <div
                        class="sidebar sticky-sidebar col-lg-3"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1004px;"
                    ></div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            newContents: [],
            newImgContents: [],
            statistics: []
        };
    },
    created() {
        axios.get("api/cont-new-home").then(res => {
            console.log(res.data);
            this.newContents = res.data;
        });
        axios.get("api/get-all-image").then(res => {
            this.newImgContents = res.data;
        });
        axios.get("api/get-statistic-all").then(res => {
            this.statistics = res.data;
            console.log(this.statistics);
        });
    },

    mounted() {}
};
</script>
<style lang=""></style>
