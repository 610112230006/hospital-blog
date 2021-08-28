<template lang="">
    <div>
        <section
            id="page-content"
            class="sidebar-right"
            style="transform: none;"
        >
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <!-- content -->
                    <div class="content col-lg-9">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
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
                                                v-for="(image, index) in images"
                                                :key="index"
                                            >
                                                <img
                                                    alt=""
                                                    class="img-fluid"
                                                    width="100%"
                                                    :src="
                                                        'storage/' + image.url
                                                    "
                                                />
                                            </slide>
                                        </carousel>
                                    </div>
                                    <div class="post-item-description">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <h2>{{ content.title }}</h2>
                                            <div v-if="checkAuth">
                                                <button
                                                    type="button"
                                                    class="btn btn-primary"
                                                >
                                                    อัพเดท
                                                </button>
                                                <button
                                                    type="button"
                                                    class="btn btn-primary"
                                                >
                                                    ลบ
                                                </button>
                                            </div>
                                        </div>
                                        <div class="post-meta">
                                            <span class="post-meta-date"
                                                ><i class="icon-clock"></i
                                                >{{
                                                    `เขียนเมื่อ ${content.created_at}, `
                                                }}</span
                                            >
                                            <span class="post-meta-comments"
                                                ><i class="icon-user"></i>
                                                {{
                                                    `ผู้เขียน ${content.f_name} ${content.l_name}`
                                                }}</span
                                            >
                                        </div>
                                        <div v-html="content.detail"></div>
                                    </div>
                                    <!--<div class="post-tags">
                                    <a href="#">{{content.type}}</a>                                    
                                </div>-->
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>
                    </div>
                    <!-- end: content -->
                    <!-- Sidebar-->
                    <div
                        class="sidebar sticky-sidebar col-lg-3"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;"
                    >
                        <!--widget newsletter-->

                        <!--end: widget newsletter-->
                        <!--Tabs with Posts-->

                        <!--End: Tabs with Posts-->
                        <!-- Twitter widget -->

                        <!-- end: Twitter widget-->
                        <!--widget tags -->

                        <!--end: widget tags -->
                        <div
                            class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"
                        >
                            <div class="widget  widget-newsletter">
                                <form
                                    id="widget-search-form-sidebar"
                                    action="search-results-page.html"
                                    method="get"
                                >
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            aria-required="true"
                                            name="q"
                                            class="form-control widget-search-form"
                                            placeholder="Search for pages..."
                                        />
                                        <button
                                            class="btn btn-primary"
                                            type="submit"
                                        >
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget">
                                <div class="tabs">
                                    <ul
                                        class="nav nav-tabs"
                                        id="tabs-posts"
                                        role="tablist"
                                    >
                                        <li class="nav-item">
                                            <a
                                                class="nav-link active"
                                                id="home-tab"
                                                data-bs-toggle="tab"
                                                href="#popular"
                                                role="tab"
                                                aria-controls="popular"
                                                aria-selected="true"
                                                >Popular</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="profile-tab"
                                                data-bs-toggle="tab"
                                                href="#featured"
                                                role="tab"
                                                aria-controls="featured"
                                                aria-selected="false"
                                                >Featured</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="contact-tab"
                                                data-bs-toggle="tab"
                                                href="#recent"
                                                role="tab"
                                                aria-controls="recent"
                                                aria-selected="false"
                                                >Recent</a
                                            >
                                        </li>
                                    </ul>
                                    <div
                                        class="tab-content"
                                        id="tabs-posts-content"
                                    >
                                        <div
                                            class="tab-pane fade show active"
                                            id="popular"
                                            role="tabpanel"
                                            aria-labelledby="popular-tab"
                                        >
                                            <div class="post-thumbnail-list">
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/5.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >A true story, that
                                                            never been told!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            6m ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Technology</span
                                                        >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/6.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >Beautiful nature,
                                                            and rare
                                                            feathers!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            24h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/7.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >The most happiest
                                                            time of the day!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            11h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="tab-pane fade"
                                            id="featured"
                                            role="tabpanel"
                                            aria-labelledby="featured-tab"
                                        >
                                            <div class="post-thumbnail-list">
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/6.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >Beautiful nature,
                                                            and rare
                                                            feathers!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            24h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/7.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >The most happiest
                                                            time of the day!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            11h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/8.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >New costs and rise
                                                            of the economy!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            11h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="tab-pane fade"
                                            id="recent"
                                            role="tabpanel"
                                            aria-labelledby="recent-tab"
                                        >
                                            <div class="post-thumbnail-list">
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/7.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >The most happiest
                                                            time of the day!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            11h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/8.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >New costs and rise
                                                            of the economy!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            11h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumbnail-entry"
                                                >
                                                    <img
                                                        alt=""
                                                        src="images/blog/thumbnail/6.jpg"
                                                    />
                                                    <div
                                                        class="post-thumbnail-content"
                                                    >
                                                        <a href="#"
                                                            >Beautiful nature,
                                                            and rare
                                                            feathers!</a
                                                        >
                                                        <span class="post-date"
                                                            ><i
                                                                class="icon-clock"
                                                            ></i>
                                                            24h ago</span
                                                        >
                                                        <span
                                                            class="post-category"
                                                            ><i
                                                                class="fa fa-tag"
                                                            ></i>
                                                            Lifestyle</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
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
                        </div>
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    props: ["id_content"],
    data() {
        return {
            content: {},
            images: [],
            checkAuth: false
        };
    },
    mounted() {
        this.fetchData();
        axios.get("auth-user").then(res => {
            if (res.data.id == null) {
                this.checkAuth = false;
            } else {
                if (res.data.type == "admin") {
                    this.checkAuth = true;
                } else if (res.data.type == "user") {
                    if (this.content.user_id == res.data.id) {
                        this.checkAuth = true;
                    } else {
                        this.checkAuth = false;
                    }
                }
            }
            console.log(this.checkAuth);
        });
    },
    methods: {
        fetchData() {
            axios.get(`api/get-content-by-id/${this.id_content}`).then(res => {
                this.content = res.data[0];
            });
            axios
                .get(`api/get-image-by-idContent/${this.id_content}`)
                .then(res => {
                    this.images = res.data;
                });
        }
    }
};
</script>
<style lang=""></style>
