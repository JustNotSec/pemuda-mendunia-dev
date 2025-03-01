<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clarity - Tailwind CSS Template for Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="icon" href="https://clarity-tailwind.preview.uideck.com/favicon.ico"><link href="https://clarity-tailwind.preview.uideck.com/style.css" rel="stylesheet"></head>

  <body
    x-data="{ page: 'home', 'loaded': true, 'modalNewsletter': false, 'modalSearch': false, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
  >

  @include('components.core.navbar')

    <main>
      <!-- ===== Hero Section Start ===== -->
      <section
        id="home"
        class="rounded-b-[50px] relative overflow-hidden z-10 pb-15 pt-34"
      >
        <!-- Hero BG Shapes Start -->
        <div>
          <div
            class="absolute bottom-0 left-0 rounded-b-[50px] w-full h-full bg-gray"
          ></div>
          <div
            class="hidden lg:block absolute bottom-0 left-0 rounded-b-[50px] w-full h-full"
          >
            <img src="https://clarity-tailwind.preview.uideck.com/images/hero-bg.svg" alt="hero" />
          </div>
        </div>
        <!-- Hero BG Shapes End -->

        <!-- Hero Content Start -->
        <div class="mx-auto max-w-[1170px] px-4 sm:px-8 xl:px-0 relative z-1">
          <div class="flex flex-wrap gap-x-7.5 gap-y-9">
            <!-- Hero item -->
            <div
              class="max-w-[1170px] w-full flex flex-col lg:flex-row lg:items-center gap-7.5 lg:gap-11 bg-white shadow-1 rounded-xl p-4 lg:p-2.5"
            >
              <div class="lg:max-w-[536px] w-full">
                <a href="blog-single.html">
                  <img
                    class="w-full"
                    src="https://clarity-tailwind.preview.uideck.com/images/hero-01.png"
                    alt="hero"
                  />
                </a>
              </div>

              <div class="lg:max-w-[540px] w-full">
                <a
                  href="category.html"
                  class="inline-flex text-purple-dark bg-purple/[0.08] font-medium text-sm py-1 px-3 rounded-full mb-4"
                  >Lifestyle</a
                >
                <h1
                  class="font-bold text-custom-4 xl:text-heading-4 text-dark mb-4"
                >
                  <a href="blog-single.html">
                    Begin here to obtain a brief summary encompassing all the
                    essential
                  </a>
                </h1>
                <p class="max-w-[524px]">
                  This comprehensive post serves as your cheat-sheet to swiftly
                  familiarize yourself with Ghost. Packed with crucial...
                </p>
                <div class="flex items-center gap-2.5 mt-5">
                  <a href="author.html" class="flex items-center gap-3">
                    <div class="flex w-6 h-6 rounded-full overflow-hidden">
                      <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                    </div>
                    <p class="text-sm">Adrio Devid</p>
                  </a>

                  <span
                    class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                  ></span>

                  <p class="text-sm">Sep 10, 2025</p>
                </div>
              </div>
            </div>

            <!-- Hero item -->
            <div
              class="lg:max-w-[570px] w-full flex flex-col sm:flex-row sm:items-center gap-6 bg-white shadow-1 rounded-xl p-2.5"
            >
              <div class="lg:max-w-[238px] w-full">
                <a href="blog-single.html">
                  <img
                    class="w-full"
                    src="https://clarity-tailwind.preview.uideck.com/images/hero-02.png"
                    alt="hero"
                  />
                </a>
              </div>

              <div class="lg:max-w-[272px] w-full">
                <a
                  href="category.html"
                  class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full mb-4"
                  >Technology</a
                >
                <h2 class="font-semibold text-custom-lg text-dark mb-3">
                  <a href="blog-single.html">
                    14 Innovative Architectural Designs to Create a Vast
                    Interior Space
                  </a>
                </h2>
                <div class="flex items-center gap-2.5">
                  <p class="text-sm">
                    <a href="author.html">By Adrio Devid</a>
                  </p>

                  <span
                    class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                  ></span>

                  <p class="text-sm">Sep 10, 2025</p>
                </div>
              </div>
            </div>

            <!-- Hero item -->
            <div
              class="lg:max-w-[570px] w-full flex flex-col sm:flex-row sm:items-center gap-6 bg-white shadow-1 rounded-xl p-2.5"
            >
              <div class="lg:max-w-[238px] w-full">
                <a href="blog-single.html">
                  <img
                    class="w-full"
                    src="https://clarity-tailwind.preview.uideck.com/images/hero-03.png"
                    alt="hero"
                  />
                </a>
              </div>

              <div class="lg:max-w-[272px] w-full">
                <a
                  href="category.html"
                  class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full mb-4"
                  >Travel</a
                >
                <h2 class="font-semibold text-custom-lg text-dark mb-3">
                  <a href="blog-single.html">
                    Traveller Visiting Ice Cave With Amazing Eye-catching view
                    with nature
                  </a>
                </h2>
                <div class="flex items-center gap-2.5">
                  <p class="text-sm">
                    <a href="author.html">By Adrio Devid</a>
                  </p>

                  <span
                    class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                  ></span>

                  <p class="text-sm">Sep 10, 2025</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Hero Content End -->
      </section>
      <!-- ===== Hero Section End ===== -->

      <!-- ====== Blog Category Section Start -->
      <section class="pt-20 lg:pt-25 pb-15">
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
          <!-- section title -->
          <div class="mb-12.5 text-center">
            <h2
              class="text-dark mb-3.5 text-2xl font-bold sm:text-4xl xl:text-heading-3"
            >
              Browse by Category
            </h2>
            <p>Select a category to see more related content</p>
          </div>

          <div
            x-data="{ selectedCategory: 'All', activeClass: 'bg-dark border-dark text-white', inactiveClass: 'bg-gray border-gray-3 text-dark',}"
          >
            <!-- Blog Categories Tab Start -->
            <div class="flex flex-wrap justify-center gap-4 items-center mb-15">
              <button
                @click="selectedCategory = 'All'"
                class="rounded-full border py-2.5 px-4.5 font-medium hover:bg-dark hover:border-dark hover:text-white ease-in duration-200"
                :class=" selectedCategory === 'All' ? activeClass : inactiveClass "
              >
                All (20)
              </button>
              <button
                @click="selectedCategory = 'Technology'"
                class="rounded-full border py-2.5 px-4.5 font-medium hover:bg-dark hover:border-dark hover:text-white ease-in duration-200"
                :class=" selectedCategory === 'Technology' ? activeClass : inactiveClass "
              >
                Technology (03)
              </button>
              <button
                @click="selectedCategory = 'Lifestyle'"
                class="rounded-full border py-2.5 px-4.5 font-medium hover:bg-dark hover:border-dark hover:text-white ease-in duration-200"
                :class=" selectedCategory === 'Lifestyle' ? activeClass : inactiveClass "
              >
                Lifestyle (02)
              </button>
              <button
                @click="selectedCategory = 'Travel'"
                class="rounded-full border py-2.5 px-4.5 font-medium hover:bg-dark hover:border-dark hover:text-white ease-in duration-200"
                :class=" selectedCategory === 'Travel' ? activeClass : inactiveClass "
              >
                Travel (05)
              </button>
              <button
                @click="selectedCategory = 'Health'"
                class="rounded-full border py-2.5 px-4.5 font-medium hover:bg-dark hover:border-dark hover:text-white ease-in duration-200"
                :class=" selectedCategory === 'Health' ? activeClass : inactiveClass "
              >
                Health (09)
              </button>
              <button
                @click="selectedCategory = 'Culture'"
                class="rounded-full border py-2.5 px-4.5 font-medium hover:bg-dark hover:border-dark hover:text-white ease-in duration-200"
                :class=" selectedCategory === 'Culture' ? activeClass : inactiveClass "
              >
                Culture (01)
              </button>
            </div>
            <!-- Blog Categories Tab End -->

            <!-- Blog Categories Content Start -->
            <div>
              <!-- All content start -->
              <div x-show="selectedCategory === 'All'">
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
                >
                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-01.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Technology</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-02.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Technology</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-03.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Technology</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-04.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h4>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h4>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-purple-dark bg-purple/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Lifestyle</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-05.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h4>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h4>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Travel</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-06.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h4>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h4>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Travel</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- All content end -->

              <!-- Technology content start -->
              <div x-show="selectedCategory === 'Technology'">
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
                >
                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-01.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Technology</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-02.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Technology</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-03.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Technology</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- Technology content end -->

              <!-- Lifestyle content start -->
              <div x-show="selectedCategory === 'Lifestyle'">
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
                >
                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-04.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-purple-dark bg-purple/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Lifestyle</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- Lifestyle content end -->

              <!-- Travel content start -->
              <div x-show="selectedCategory === 'Travel'">
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
                >
                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-05.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Travel</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-06.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Travel</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-07.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Travel</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-08.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-green-dark bg-green/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Travel</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- Travel content end -->

              <!-- Health content start -->
              <div x-show="selectedCategory === 'Health'">
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
                >
                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-09.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-teal-dark bg-teal/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Health</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- Health content end -->

              <!-- Culture content start -->
              <div x-show="selectedCategory === 'Culture'">
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
                >
                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-10.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-cyan-dark bg-cyan/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Culture</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-11.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-cyan-dark bg-cyan/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Culture</a
                      >
                    </div>
                  </div>

                  <!-- blog item -->
                  <div class="group">
                    <div
                      class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                    >
                      <a href="blog-single.html">
                        <img
                          src="https://clarity-tailwind.preview.uideck.com/images/blog-12.png"
                          alt="image"
                          class="w-full"
                        />
                      </a>
                    </div>

                    <h3>
                      <a
                        href="blog-single.html"
                        class="block text-dark font-bold text-xl mb-3.5"
                      >
                        <span
                          class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                        >
                          Stylish Kitchen And Dining Room With Functional Ideas
                        </span>
                      </a>
                    </h3>
                    <p>
                      Lorem Ipsum is simply dummy text of the print and
                      typesetting industry...
                    </p>

                    <div
                      class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                    >
                      <div class="flex items-center gap-2.5">
                        <a href="author.html" class="flex items-center gap-3">
                          <div
                            class="flex w-6 h-6 rounded-full overflow-hidden"
                          >
                            <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                          </div>
                          <p class="text-sm">Adrio Devid</p>
                        </a>

                        <span
                          class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                        ></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a
                        href="category.html"
                        class="inline-flex text-cyan-dark bg-cyan/[0.08] font-medium text-sm py-1 px-3 rounded-full"
                        >Culture</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- Culture content end -->
            </div>
            <!-- Blog Categories Content End -->

            <!-- Blog Show More BTN -->
            <button
              class="flex justify-center font-medium text-dark border border-dark rounded-md py-3 px-7.5 hover:bg-dark hover:text-white ease-in duration-200 mx-auto mt-12.5 lg:mt-17.5"
            >
              Browse all Posts
            </button>
          </div>
        </div>
      </section>
      <!-- ====== Blog Category Section End -->

      <!-- ======  Authors Section Start -->
      <section class="pb-15">
        <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
          <div class="flex flex-wrap items-center justify-between gap-8 mb-6">
            <h2 class="font-semibold text-heading-5 text-dark">Top Authors</h2>
            <a href="#" class="group text-dark leading-none">
              <span
                class="flex items-center gap-2 bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]"
              >
                All Authors

                <svg
                  class="fill-current group-hover:rotate-45 transition-all"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_675_6418)">
                    <path
                      d="M13.7734 3.59902L5.48035 3.53935C5.12237 3.53935 4.84395 3.81778 4.84395 4.17575C4.84395 4.53372 5.12237 4.81215 5.48035 4.81215L12.2222 4.87181L3.77003 13.3239C3.53138 13.5626 3.53138 13.9603 3.77003 14.199C4.00868 14.4376 4.42632 14.4575 4.66496 14.2189L13.1569 5.72696L13.2165 12.5483C13.2165 12.9063 13.495 13.1847 13.8529 13.1847C14.012 13.1847 14.1711 13.1052 14.2905 12.9859C14.4098 12.8665 14.4893 12.7074 14.4694 12.5284L14.4098 4.23541C14.4098 3.87744 14.1314 3.59902 13.7734 3.59902Z"
                      fill=""
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_675_6418">
                      <rect width="18" height="18" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </a>
          </div>

          <div class="pt-14 border-t border-gray-3">
            <div
              class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
            >
              <!-- Author Item -->
              <a href="author.html" class="group">
                <div
                  class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all"
                >
                  <div class="flex flex-wrap items-center gap-8">
                    <div class="w-25 h-25 rounded-full overflow-hidden">
                      <img src="https://clarity-tailwind.preview.uideck.com/images/user-01.png" alt="user" />
                    </div>

                    <div>
                      <h3 class="font-semibold text-custom-xl text-dark mb-1">
                        Adrio Devid
                      </h3>
                      <p>Director of Operations</p>
                      <span
                        class="flex items-center gap-2 text-custom-sm mt-2.5"
                      >
                        <svg
                          class="fill-current"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z"
                            fill=""
                          />
                          <path
                            d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z"
                            fill=""
                          />
                        </svg>
                        03 Published posts
                      </span>
                    </div>
                  </div>
                </div>
              </a>

              <!-- Author Item -->
              <a href="author.html" class="group">
                <div
                  class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all"
                >
                  <div class="flex flex-wrap items-center gap-8">
                    <div class="w-25 h-25 rounded-full overflow-hidden">
                      <img src="https://clarity-tailwind.preview.uideck.com/images/user-02.png" alt="user" />
                    </div>

                    <div>
                      <h3 class="font-semibold text-custom-xl text-dark mb-1">
                        Rayna Kenter
                      </h3>
                      <p>Content writer</p>
                      <span
                        class="flex items-center gap-2 text-custom-sm mt-2.5"
                      >
                        <svg
                          class="fill-current"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z"
                            fill=""
                          />
                          <path
                            d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z"
                            fill=""
                          />
                        </svg>
                        05 Published posts
                      </span>
                    </div>
                  </div>
                </div>
              </a>

              <!-- Author Item -->
              <a href="author.html" class="group">
                <div
                  class="border border-gray-3 rounded-[20px] bg-gray p-5 group-hover:bg-white group-hover:drop-shadow-1 group-hover:-translate-y-2 transition-all"
                >
                  <div class="flex flex-wrap items-center gap-8">
                    <div class="w-25 h-25 rounded-full overflow-hidden">
                      <img src="https://clarity-tailwind.preview.uideck.com/images/user-03.png" alt="user" />
                    </div>

                    <div>
                      <h3 class="font-semibold text-custom-xl text-dark mb-1">
                        Talan Philips
                      </h3>
                      <p>Director of Operations</p>
                      <span
                        class="flex items-center gap-2 text-custom-sm mt-2.5"
                      >
                        <svg
                          class="fill-current"
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M5.775 14.4501H2.575C2.325 14.4501 2.125 14.2501 2.125 14.0001V2.00009C2.125 1.75009 2.325 1.55009 2.575 1.55009H8.225V4.75009C8.225 5.05009 8.475 5.32509 8.8 5.32509H11.975V7.00009C11.975 7.30009 12.225 7.57509 12.55 7.57509C12.875 7.57509 13.125 7.32509 13.125 7.00009V4.90009C13.125 4.62509 13 4.35009 12.8 4.15009L9.3 0.750091C9.1 0.550091 8.825 0.450091 8.55 0.450091H2.55C1.7 0.425091 1 1.15009 1 2.00009V14.0001C1 14.8501 1.7 15.5751 2.575 15.5751H5.8C6.1 15.5751 6.375 15.3251 6.375 15.0001C6.375 14.6751 6.1 14.4501 5.775 14.4501ZM9.325 2.35009L11.2 4.20009H9.325V2.35009Z"
                            fill=""
                          />
                          <path
                            d="M14.7996 9.40015C14.5996 9.20015 14.3996 9.00015 14.1996 8.80015C14.0246 8.62515 13.8496 8.42515 13.6496 8.25015C13.5496 8.12515 13.3996 8.02515 13.2246 8.00015C13.0246 7.97515 12.8246 8.02515 12.6746 8.15015L8.32461 12.4751C8.19961 12.6001 8.12461 12.7251 8.07461 12.8751L7.44961 14.7751L7.34961 15.0751L7.52461 15.3001C7.59961 15.4001 7.74961 15.5501 8.02461 15.5501H8.12461L10.0996 14.9001C10.2496 14.8501 10.3996 14.7751 10.4996 14.6501L14.7996 10.3751C14.9246 10.2501 14.9996 10.0751 14.9996 9.87515C14.9996 9.70015 14.9246 9.52515 14.7996 9.40015ZM13.1246 9.30015C13.2246 9.40015 13.3246 9.50015 13.3996 9.60015C13.4996 9.70015 13.5996 9.80015 13.6996 9.90015L13.4246 10.1751L12.8496 9.60015L13.1246 9.30015ZM9.72461 13.8501L8.84961 14.1251L9.12461 13.2501L12.0246 10.3501L12.5996 10.9251L9.72461 13.8501Z"
                            fill=""
                          />
                        </svg>
                        10 Published posts
                      </span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ======  Authors Section End -->

      <!-- ====== Newsletter Section Start -->
      <section class="py-12.5 bg-gray relative overflow-hidden z-10">
  <div class="absolute left-0 top-0 w-full h-full -z-1">
    <img src="https://clarity-tailwind.preview.uideck.com/images/bg-dots.svg" alt="dot" />
  </div>
  <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
    <div class="bg-white shadow-1 rounded-[10px] py-9 px-4 sm:px-8 xl:px-10">
      <div class="flex flex-wrap items-center justify-between gap-10">
        <div class="max-w-[455px] w-full">
          <h3 class="font-semibold text-heading-6 text-dark mb-3">
            Subscribe to Newsletter
          </h3>
          <p>
            Provide your email to get email notification when we launch new
            products or publish new articles
          </p>
        </div>
        <div class="max-w-[494px] w-full">
          <form>
            <div class="flex items-center gap-5">
              <div class="max-w-[350px] w-full">
                <input
                  id="email"
                  type="email"
                  name="email"
                  placeholder="Enter your Email"
                  class="rounded-md border border-gray-3 bg-white placeholder:text-dark-5 w-full py-3.5 px-5 outline-none focus:shadow-input focus:ring-2 focus:ring-dark-4/20 focus:border-transparent"
                />
              </div>
              <button
                class="font-medium rounded-md text-white bg-dark flex py-3.5 px-5.5 hover:opacity-90 transition-all ease-linear duration-300"
              >
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- ====== Newsletter Section End -->
    </main>
    @include('components.core.footer')

    <!-- Modals start -->
    <div
  x-show="modalNewsletter"
  :class="modalNewsletter && 'z-99999'"
  class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-[#000]/25 backdrop-blur-sm px-4 py-5"
>
  <div
    x-show="modalNewsletter"
    x-transition
    @click.outside="modalNewsletter = false"
    class="w-full max-w-[600px] rounded-2xl shadow-box-2 bg-white p-4 sm:p-7.5 xl:p-12.5 relative transform transition-all scale-100"
  >
    <button
      @click="modalNewsletter = false"
      class="absolute top-6 right-6 flex items-center justify-center w-9 h-9 rounded-full ease-in duration-150 hover:text-dark hover:bg-gray-2"
    >
      <svg
        class="fill-current"
        width="20"
        height="20"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M1.22505 1.22474C1.46912 0.980668 1.86486 0.980668 2.10893 1.22474L10.0003 9.1161L17.8917 1.22474C18.1358 0.980668 18.5315 0.980668 18.7756 1.22474C19.0197 1.46882 19.0197 1.86455 18.7756 2.10863L10.8842 10L18.7756 17.8914C19.0197 18.1355 19.0197 18.5312 18.7756 18.7753C18.5315 19.0194 18.1358 19.0194 17.8917 18.7753L10.0003 10.8839L2.10893 18.7753C1.86486 19.0194 1.46912 19.0194 1.22505 18.7753C0.980973 18.5312 0.980973 18.1355 1.22505 17.8914L9.11641 10L1.22505 2.10863C0.980973 1.86455 0.980973 1.46882 1.22505 1.22474Z"
          fill=""
        />
      </svg>
    </button>
    <h3 class="font-semibold text-dark text-heading-5 mb-1.5">Newsletter</h3>
    <p>Subscribe to my newsletter to get updated posts</p>

    <div class="mt-7.5">
      <form>
        <div class="mb-5.5">
          <label for="email" class="block font-medium text-dark mb-2.5"
            >Email</label
          >
          <input
            type="email"
            placeholder="Enter your email"
            class="rounded-md border border-gray-4 bg-white placeholder:text-dark-3 w-full py-3.5 px-5 outline-none ease-in duration-300 focus:shadow-input focus:ring-2 focus:ring-dark-4/20 focus:border-transparent"
          />
        </div>

        <button
          type="submit"
          class="w-full rounded-md text-white font-medium flex justify-center py-3.5 px-5 bg-primary hover:opacity-90 lg:transition-all lg:ease-linear lg:duration-300"
        >
          Subscribe
        </button>

        <p class="text-center mt-4.5">Don't worry, I don't spam</p>
      </form>
    </div>
  </div>
</div>

    <div
  x-show="modalSearch"
  :class="modalSearch && 'z-99999'"
  class="fixed inset-0 flex items-center justify-center px-4 py-5"
>
  <div
    class="fixed inset-0 bg-[#000]/25 backdrop-blur-sm transition-opacity"
  ></div>
  <div
    x-show="modalSearch"
    x-transition
    @click.outside="modalSearch = false"
    class="w-full max-w-[700px] rounded-lg overflow-hidden shadow-box-2 bg-white relative ease-in duration-200"
  >
    <div class="">
      <form>
        <div class="relative">
          <button
            class="flex items-center justify-center absolute left-0 top-0 pl-7 pr-3 py-6.5"
          >
            <svg
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.1875 17.4063L14.0313 13.2188C16.1563 10.3125 15.9375 6.15625 13.2813 3.53125C11.875 2.125 10 1.34375 8 1.34375C6 1.34375 4.125 2.125 2.71875 3.53125C-0.1875 6.4375 -0.1875 11.1875 2.71875 14.0938C4.125 15.5 6 16.2813 8 16.2813C9.90625 16.2813 11.6875 15.5625 13.0938 14.2813L18.3125 18.5C18.4375 18.5938 18.5938 18.6563 18.75 18.6563C18.9688 18.6563 19.1563 18.5625 19.2813 18.4063C19.5313 18.0938 19.5 17.6563 19.1875 17.4063ZM8 14.875C6.375 14.875 4.875 14.25 3.71875 13.0938C1.34375 10.7188 1.34375 6.875 3.71875 4.53125C4.875 3.375 6.375 2.75 8 2.75C9.625 2.75 11.125 3.375 12.2813 4.53125C14.6563 6.90625 14.6563 10.75 12.2813 13.0938C11.1563 14.25 9.625 14.875 8 14.875Z"
                fill="#15171A"
              />
            </svg>
          </button>

          <input
            type="search"
            name="search"
            id="search"
            placeholder="Search posts, tags and authors"
            autocomplete="off"
            class="w-full rounded-t-lg bg-white text-body pl-15 pr-3 py-6 outline-none ease-in duration-300 placeholder:text-dark-3"
          />

          <button
            @click="modalSearch = false"
            class="absolute top-4.5 right-7 flex items-center justify-center w-9 h-9 rounded-full ease-in duration-150 hover:text-dark hover:bg-gray-2"
          >
            <svg
              class="fill-current"
              width="14"
              height="14"
              viewBox="0 0 14 14"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g clip-path="url(#clip0_724_5430)">
                <path
                  d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                  fill=""
                />
              </g>
              <defs>
                <clipPath id="clip0_724_5430">
                  <rect width="14" height="14" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </button>
        </div>
      </form>

      <div class="border-y border-gray-3 py-3 lg:py-4.5 px-4 lg:px-7">
        <h5 class="font-medium text-dark">Posts</h5>
      </div>

      <div class="py-3.5">
        <div
          class="cursor-pointer ease-in duration-300 hover:bg-gray py-3.5 px-4 lg:px-7"
        >
          <h6 class="font-medium text-dark mb-1.5">
            Writing and managing content in Clarity, an advanced guide
          </h6>
          <p class="text-custom-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing...
          </p>
        </div>

        <div
          class="cursor-pointer ease-in duration-300 hover:bg-gray py-3.5 px-4 lg:px-7"
        >
          <h6 class="font-medium text-dark mb-1.5">
            Writing and managing content in Clarity, an advanced guide
          </h6>
          <p class="text-custom-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing...
          </p>
        </div>

        <div
          class="cursor-pointer ease-in duration-300 hover:bg-gray py-3.5 px-4 lg:px-7"
        >
          <h6 class="font-medium text-dark mb-1.5">
            Writing and managing content in Clarity, an advanced guide
          </h6>
          <p class="text-custom-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing...
          </p>
        </div>

        <div
          class="cursor-pointer ease-in duration-300 hover:bg-gray py-3.5 px-4 lg:px-7"
        >
          <h6 class="font-medium text-dark mb-1.5">
            Writing and managing content in Clarity, an advanced guide
          </h6>
          <p class="text-custom-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing...
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Modals end -->

    <!-- ====== Back To Top Start ===== -->
    <button
  class="hidden items-center justify-center w-10 h-10 rounded-[4px] shadow-solid-5 bg-dark hover:opacity-95 fixed bottom-8 right-8 z-999"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
  :class="{ '!flex' : scrollTop }"
>
  <svg
    class="fill-white w-5 h-5"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 512 512"
  >
    <path
      d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"
    />
  </svg>
</button>

    <!-- ====== Back To Top End ===== -->
  <script defer src="https://clarity-tailwind.preview.uideck.com/bundle.js"></script><script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'919791f8ae2591a7',t:'MTc0MDgyMDc0MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"919791f8ae2591a7","version":"2025.1.0","r":1,"token":"9a6015d415bb4773a0bff22543062d3b","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>
</html>
