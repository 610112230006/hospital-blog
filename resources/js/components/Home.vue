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
                                                        height= "100"
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
                                            >{{
                                                `${newContent.time_show}, `
                                            }}</span
                                        >
                                        <span class="post-meta-date">
                                            <i class="icon-user"></i>ผู้เขียน
                                            {{
                                                `${newContent.f_name} ${newContent.l_name}, `
                                            }}</span
                                        >
                                        <span
                                            v-for="statistic in statistics"
                                            v-if="
                                                statistic.id_content ==
                                                    newContent.id
                                            "
                                            class="post-meta-date"
                                        >
                                            <i class="icon-eye"></i>เข้าชม
                                            {{ statistic.number_preview }}
                                            ครั้ง</span
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
                    </div>
                    <!-- end: post content -->
                    <!-- Sidebar-->
                    <div
                        class="sidebar sticky-sidebar col-lg-3"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;"
                    >
                        <!--Tabs with Posts-->

                        <!--End: Tabs with Posts-->
                        <!-- Twitter widget -->

                        <!-- end: Twitter widget-->
                        <!--widget tags -->

                        <!--end: widget tags -->
                        <!--widget newsletter-->

                        <!--end: widget newsletter-->
                        <div
                            class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"
                        >
                            <div class="widget ">
                                <h4 class="widget-title">มีผู้เข้าชมมากสุด</h4>
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">
                                        <img
                                            alt=""
                                            src="images/blog/thumbnail/5.jpg"
                                        />
                                        <div class="post-thumbnail-content">
                                            <a href="#"
                                                >A true story, that never been
                                                told!</a
                                            >
                                            <span class="post-date"
                                                ><i class="icon-clock"></i> 6m
                                                ago</span
                                            >
                                            <span class="post-category"
                                                ><i class="fa fa-tag"></i>
                                                Technology</span
                                            >
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img
                                            alt=""
                                            src="images/blog/thumbnail/6.jpg"
                                        />
                                        <div class="post-thumbnail-content">
                                            <a href="#"
                                                >Beautiful nature, and rare
                                                feathers!</a
                                            >
                                            <span class="post-date"
                                                ><i class="icon-clock"></i> 24h
                                                ago</span
                                            >
                                            <span class="post-category"
                                                ><i class="fa fa-tag"></i>
                                                Lifestyle</span
                                            >
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">
                                        <img
                                            alt=""
                                            src="images/blog/thumbnail/7.jpg"
                                        />
                                        <div class="post-thumbnail-content">
                                            <a href="#"
                                                >Lorem ipsum dolor sit amet</a
                                            >
                                            <span class="post-date"
                                                ><i class="icon-clock"></i> 11h
                                                ago</span
                                            >
                                            <span class="post-category"
                                                ><i class="fa fa-tag"></i>
                                                Lifestyle</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="widget widget-tweeter"
                                data-username="envato"
                                data-limit="2"
                            >
                                <h4 class="widget-title">Recent Tweets</h4>
                                <div id="twitter-cnt">
                                    <span>Loading...</span>
                                </div>
                            </div>
                            <div class="widget  widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tags">
                                    <a href="#">Design</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Branding</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Clean</a>
                                    <a href="#">Peace</a>
                                    <a href="#">Love</a>
                                    <a href="#">CSS3</a>
                                    <a href="#">jQuery</a>
                                </div>
                            </div>
                            <div class="widget  widget-newsletter">
                                <form
                                    class="widget-subscribe-form"
                                    novalidate=""
                                    action="include/subscribe-form.php"
                                    role="form"
                                    method="post"
                                >
                                    <h4 class="widget-title">Newsletter</h4>
                                    <small
                                        >Stay informed on our latest
                                        news!</small
                                    >
                                    <div class="input-group">
                                        <input
                                            type="email"
                                            required=""
                                            name="widget-subscribe-form-email"
                                            class="form-control required email"
                                            placeholder="Enter your Email"
                                        />
                                        <span class="input-group-btn">
                                            <button
                                                type="submit"
                                                id="widget-subscribe-submit-button"
                                                class="btn btn-primary"
                                            >
                                                <i
                                                    class="fa fa-paper-plane"
                                                ></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end: Sidebar-->
                </div>
                <h1>ข่าวสารล่าสุด</h1>
                <carousel :perPage="4">
                    <slide class="p-3">
                        <div class="card">
                            <img class="card-img-top" src="" alt="" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </slide>
                </carousel>
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
   

    mounted() {
        axios.get("api/cont-new-home").then(res => {
            console.log(res.data);
            this.newContents = res.data;
        });
        axios.get("api/get-all-image").then(res => {
            this.newImgContents = res.data;
        });
        axios.get("api/get-statistic-all").then(res => {
            this.statistics = res.data;
    
        }).catch((err)=>{
            console.log(err.response.data)
        });
    }
};
</script>
<style lang=""></style>
