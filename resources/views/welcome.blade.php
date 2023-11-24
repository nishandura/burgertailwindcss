<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- font awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- swiper css link --}}
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
</head>

<body >
    {{-- start of header  --}}
    <header class="bg-primaryColor dark:bg- dark:bg-darkColorLight  fixed top-0 left-0 w-full z-50" id="header">
        <nav class=" relative h-14 flex justify-between items-center p-5">
            <div>
                <a href="" class="text-2xl uppercase font-oswald">
                    Bur<span class="text-secondaryColor">ger</span>
                </a>
            </div>
            {{-- static remove abosulte in div and remove left-0 and top-0 --}}
            <div class="hidden absolute top-0 left-0 w-full py-5  border-b border-secondaryColor md:block md:static left-0 md:py-0 md:border-none md:w-auto md:ml-auto"
                id="nav-menu">
                <ul class="flex flex-col md:flex-row text-center gap-5">
                    <li><a href="#home" class="nav__link text-secondaryColor hover:text-secondaryColor ease-in-duration-400">Home</a>
                    </li>
                    <li><a href="#category" class="nav__link hover:text-secondaryColor ease-in-duration-400">Category</a></li>
                    <li><a href="#menu" class="nav__link hover:text-secondaryColor ease-in-duration-400">Menu</a>
                    </li>
                    <li><a href="#review" class="nav__link hover:text-secondaryColor ease-in-duration-400">Review</a></li>
                  
                </ul>
                <div class="absolute top-[0.7rem] right-4 cursor-pointer md:hidden">
                    <i class="fa-solid fa-xmark" id="nav-close"></i>
                </div>
            </div>
            <div class="flex justify-between items-center gap-5">
                <i class="fa-regular fa-moon cursor-pointer ml-4 text-xl" id="theme-toggle"></i>
                <div class="md:hidden" id="hamburger">
                    <i class="fa-solid fa-bars cursor-pointer text-xl"></i>
                </div>
            </div>

        </nav>
    </header>
    {{-- end of header --}}
    {{-- start of home section --}}
    <section id="home">
        <div class="container flex flex-col items-center gap-10 md:flex-row">
            <div class="mx-auto md:basis-1/2 lg:basis-2/5 animate-movingY">
                <img src="{{ asset('img/home-image.png') }}" alt="home image" class="w-60 md:w-full home__image">
            </div>
            <div class=" home__content text-center md:basis-1/2 md:text-start lg:basis-3/5">
                <h1 class="home__title">Burger House and Crunchy</h1>
                <div class="separator mx-auto md:mx-0"></div>
                <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Recusandae temporibus architecto autem obcaecati, eveniet
                    blanditiis vero culpa, quod quas eligendi enim animi? Autem
                    sapiente minima earum nam dolor reprehenderit ipsum!</p>
                <div class="text-base flex items-center justify-center gap-4 py-10 md:justify-start md:gap-20">
                    <div text-center>
                        <i class="fa-solid fa-spoon text-secondaryColor text-4xl"></i>
                        <br>
                        Delicious
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-droplet text-secondaryColor text-4xl"></i>
                        <br>
                        Fresh
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-leaf text-secondaryColor text-4xl"></i>
                        <br>
                        Organic
                    </div>
                </div>
                <a href="" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </section>
    {{-- end of home section --}}

    {{-- start of category section --}}
    <section id="category">
        <div class="container flex flex-col gap-5 md:flex-row">
            {{-- card 1 --}}
            <div class="category_card bg-secondaryColor flex py-3 rounded-lg overflow-hidden md:flex-1">
                <div class="basis-1/3 relative"><img src="{{ asset('img/burger-1.png') }}" alt="category image"
                        class="absolute w-28 -bottom-3 -left-4"></div>
                <div>
                    <div class="mb-2">
                        <h4 class="card__title">Food</h4>
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur </p>
                    </div> 
                    <a href="#" class="text-blackColor cursor-pointer text-secondaryColor">Buy online</a>
                </div>
            </div>
            {{-- card 2 --}}
            <div class="category_card bg-redColor flex py-3 rounded-lg overflow-hidden md:flex-1">
                <div class="basis-1/3 relative"><img src="{{ asset('img/snack-1.png') }}" alt="category image"
                        class="absolute w-28 -bottom-3 -left-4"></div>
                <div>
                    <div class="mb-2">
                        <h4 class="card__title">Snack</h4>
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur </p>
                    </div>
                    <a href="#" class="cursor-pointer text-secondaryColor">Buy online</a>
                </div>
            </div>
            {{-- card 3 --}}
            <div class="category_card bg-greenColor flex py-3 rounded-lg overflow-hidden md:flex-1">
                <div class="basis-1/3 relative"><img src="{{ asset('img/beverage-2.png') }}" alt="category image"
                        class="absolute w-28 -bottom-3 -left-4"></div>
                <div>
                    <div class="mb-2">
                        <h4 class="card__title">Beverage</h4>
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur </p>
                    </div>
                    <a href="#" class="cursor-pointer text-secondaryColor">Buy online</a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of category section --}}

    {{-- start of promo section --}}
     <section id="promo">
       <div class="container flex flex-col gap-5 lg:gap-10 lg:flex-row">
            {{-- card1 --}}
            <div class="promo__card-1 bg-primaryColorLight dark:bg-darkColorLight flex flex-col p-5 rounded-lg md:flex-row md:items-center lg:flex-row-reverse lg:flex-1">
                <img src="{{asset('img/promo-1.png')}}" alt="promo image" class="w-40 mx-auto hover:animate-movingY md:mx-5">
                <div class="space-y-2 pt-5 text-center pt-5 md:pt-0">
                    <p  class="text-xs text-secondaryColor">Payday promo</p>
                    <h3 class="card__title">Get A 10% DISCOUNT ON PAYDAY WEEK</h3>
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="" class="text-xs text-secondaryColor">Buy online</a>
                </div>
            </div>
            {{-- card 2 --}}
            <div class="promo__card-2 bg-primaryColorLight dark:bg-darkColorLight flex flex-col p-5 rounded-lg md:flex-row md:items-center lg:flex-row-reverse lg:flex-1">
                <img src="{{asset('img/promo-2.png')}}" alt="promo image" class="w-40 mx-auto hover:animate-movingY mx-5s">
                <div class="space-y-2 pt-5 text-center pt-5 md:pt-0">
                    <p  class="text-xs text-secondaryColor">Payday promo</p>
                    <h3 class="card__title">Get A 10% DISCOUNT ON PAYDAY WEEK</h3>
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="" class="text-xs text-secondaryColor">Buy online</a>
                </div>
            </div>
       </div>
        
     </section>
    {{-- end of promo section --}}

    {{-- start of about section --}}
     <section id="about">
        <div class="container flex flex-col gap-10 md:flex-row">
            <div class="flex-1 aboutus__card-1"><img src="{{asset('img/about.jpg')}}" alt="about image" class="rounded-lg"></div>
            <div class="flex-1 aboutus__card-2">
                <h2 class="section__title">FIND FOOD AND DRINKS, ALL-IN-ONE PLACE FOR YOUR BEST TASTE.</h2>
                <div class="separator"></div>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt.</p>
                <ul class="grid grid-cols-2 py-5 space-y-2 ">
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-secondaryColor"></i>Best Price</li>
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-secondaryColor"></i>Fresh Ingredient</li>
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-secondaryColor"></i>Best Service</li>
                    <li class="text-xs text-paragraphColor"><i class="fa-solid fa-check text-secondaryColor"></i>Health Protocol</li>
                </ul>
                <a href="" class="btn btn-primary">About us</a>
            </div>
        </div>
     </section>
    {{-- end of about section --}}

    {{-- start of menu section --}}
     <section id="menu">
        <div class="container">
            <div class="max-w-md mx-auto text-center">
                <h2 class="section__title" >OUR BEST MENU</h2>
                <div class="separator mx-auto"></div>
                <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     Voluptate, officia.</p> 
                <div class="tabs_wrap">
                    <ul class="flex flex-wrap justify-center gap-3 py-10 menu__card">
                        <li data-tabs="all" class="btn bg-primaryColorLight dark:bg-darkColorLight active">ALL</li>
                        <li data-tabs="food" class="btn bg-primaryColorLight dark:bg-darkColorLight">Food</li>
                        <li data-tabs="snack" class="btn bg-primaryColorLight dark:bg-darkColorLight">Snack</li>
                        <li data-tabs="beverage" class="btn bg-primaryColorLight dark:bg-darkColorLight">Beverage</li>
                    </ul>
                </div>
            </div>

            <div>
                <ul class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-12">
                     {{-- food list --}}
                    <li class="food__card item_wrap food">
                        <div class="h-56 grid place-items-center bg-primaryColorLight rounded-3xl dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor  ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/burger-1.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>

                    <li class="food__card  item_wrap food">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/burger-2.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    <li class="food__card  item_wrap food">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/burger-3.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    <li class="food__card  item_wrap food">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/burger-4.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    {{-- snack list --}}
                    <li class="snack__card item_wrap">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/snack-1.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>

                    <li class="snack__card item_wrap snack">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColorrounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/snack-2.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    <li class="snack__card item_wrap snack">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/snack-3.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    <li class="snack__card item_wrap snack">
                        <div class="h-56 grid place-items-center bg-primaryColorLight  dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/snack-4.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    {{-- beverage list --}}
                    <li class="beverage__card item_wrap beverage">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/beverage-2.png')}}" alt="food image" class="w-56 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>

                    <li class="beverage__card item_wrap beverage">
                        <div class="h-56 grid place-items-center bg-primaryColorLight  dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/beverage-2.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    <li class="beverage__card item_wrap beverage">
                        <div class="h-56 grid place-items-center bg-primaryColorLight  dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl  hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/beverage-3.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                    <li class="beverage__card item_wrap beverage">
                        <div class="h-56 grid place-items-center bg-primaryColorLight dark:bg-darkColorLight dark:hover:bg-secondaryColor hover:bg-secondaryColor rounded-3xl hover:bg-secondarColor ease-linear duration-200 lg:h-40">
                            <img src="{{asset('img/beverage-5.png')}}" alt="food image" class="w-40 hover:scale-110 ease-linear duration-200 md:w-48 lg:w-24">
                        </div>
                        <div class="pt=5">
                            <div class="mb-2">
                                <h4 class="card__title">REGULAR BEEF BURGER</h4>
                                <p class="paragraph">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="text-secondaryColor">$42.00</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
     </section>
    {{-- end of menu section --}}

    {{-- start of review section --}}
     <section id="review" class="py-10">
        <div class="container">
            <div class="max-w-md mx-auto text-center">
                <h2 class="section__title" >CUSTOMER REVIEW</h2>
                <div class="separator mx-auto"></div>
                <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     Voluptate, officia.</p> 
            </div>
            <div class="swiper py-10">
                <ul class="swiper-wrapper">
                    <li class="review__card swiper-slide">
                        <div class="flex flex-col gap-5 bg-primaryColorLight dark:bg-darkColorLight rounded-lg p-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, reiciendis iusto quisquam doloribus saepe aut!</p>
                          <div class="flex items-center">
                            <img src="{{asset('img/review-1.jpg')}}" alt="review image1" class="w-12 h-12 rounded-full">
                            <div class="ml-2">
                                <p class="font-oswald uppercase">Jhon Doe</p>
                                <p class="paragraph">Hello people</p>
                            </div>
                            <i class="fa-solid fa-quote-right text-4xl text-secondaryColor ml-auto"></i>
                          </div>
                        </div>
                    </li>

                    <li class="review__card swiper-slide">
                        <div class="flex flex-col gap-5 bg-primaryColorLight dark:bg-darkColorLight rounded-lg p-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, reiciendis iusto quisquam doloribus saepe aut!</p>
                          <div class="flex items-center">
                            <img src="{{asset('img/review-2.jpg')}}" alt="review image1" class="w-12 h-12 rounded-full">
                            <div class="ml-2">
                                <p class="font-oswald uppercase">Jhon Doe</p>
                                <p class="paragraph">Hello people</p>
                            </div>
                            <i class="fa-solid fa-quote-right text-4xl text-secondaryColor ml-auto"></i>
                          </div>
                        </div>
                    </li>

                    <li class="review__card swiper-slide">
                        <div class="flex flex-col gap-5 bg-primaryColorLight dark:bg-darkColorLight rounded-lg p-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, reiciendis iusto quisquam doloribus saepe aut!</p>
                          <div class="flex items-center">
                            <img src="{{asset('img/review-3.jpg')}}" alt="review image1" class="w-12 h-12 rounded-full">
                            <div class="ml-2">
                                <p class="font-oswald uppercase">Jhon Doe</p>
                                <p class="paragraph">Hello people</p>
                            </div>
                            <i class="fa-solid fa-quote-right text-4xl text-secondaryColor ml-auto"></i>
                          </div>
                        </div>
                    </li>

                    <li class="review__card swiper-slide">
                        <div class="flex flex-col gap-5 bg-primaryColorLight dark:bg-darkColorLight rounded-lg p-6"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, reiciendis iusto quisquam doloribus saepe aut!</p>
                          <div class="flex items-center">
                            <img src="{{asset('img/review-4.jpg')}}" alt="review image1" class="w-12 h-12 rounded-full">
                            <div class="ml-2">
                                <p class="font-oswald uppercase">Jhon Doe</p>
                                <p class="paragraph">Hello people</p>
                            </div>
                            <i class="fa-solid fa-quote-right text-4xl text-secondaryColor ml-auto"></i>
                          </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>

        </div>
     </section>
    {{-- end of review section --}}


    {{-- scroll button --}}
     <a href="#" class="fixed right-4 -bottom-1/2 bg-secondaryColor shadow-sm inline-block px-4 py-2 rounded-full text-lg text-blackColor z-50 hover:-translate-y-1 ease-in duration-200" id="scroll-up">
        <i class="fa-solid fa-arrow-up"></i>
     </a>
    {{-- end of scroll button --}}
    {{-- swiper review div link --}}

    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    {{-- scrollreveal scrpit link --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    {{-- start of home div scrollreveal script --}}
     <script>
        const sr = ScrollReveal({
            origin: "top",
            distance: "60px",
            duration: 3000,
            delay:400
        })
        sr.reveal(".home__image")
        sr.reveal(".home__content",{origin: "bottom"});
        sr.reveal(".category_card",{interval: 300});
        sr.reveal(".promo__card-1",{origin: "left"});
        sr.reveal(".promo__card-2",{origin: "right"});
        sr.reveal(".aboutus__card-1",{origin: "bottom"});
        sr.reveal(".aboutus__card-2",{origin: "top"});
        sr.reveal(".menu__card",{origin: "left"});
        sr.reveal(".food__card",{origin: "top"});
        sr.reveal(".snack__card",{origin: "left"});
        sr.reveal(".beverage__card",{origin: "bottom"});
        sr.reveal(".review__card",{origin: "left"});
    </script>
    {{-- end of home div scrollreavel script --}}

    {{-- start of menu header click and active link of menuheader  --}}
     <script>
        const activeLink = () =>{
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll(".nav__link ");
            let current = 'home';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if(this.scrollY >= sectionTop - 60){
                    current = section.getAttribute('id');
                    // console.log(current);
                }
            })
            navLinks.forEach(item=>{
                // console.log(item);
                item.classList.remove("text-secondaryColor");
                if(item.href.includes(current)){
                    item.classList.add("text-secondaryColor");
                }
            });
        };
        window.addEventListener('scroll', activeLink)
    </script>
    
    {{-- end of menu header click and active link of menuheader  --}}

    {{-- start of scroll header show bottom  --}}
    <script>
        const scrolllHeader = () => {
            const header = document.getElementById("header");
            if(this.scrollY >= 50){
                header.classList.add("border-b", "border-secondaryColor");
            }else{
                header.classList.remove("border-b","border-secondaryColor");
            }
        }
        window.addEventListener('scroll',scrolllHeader)
    </script>
{{-- end of scroll header show button --}}

    {{-- start script of scroll button --}}
     <script>
        const scrollUp = () => {
            const scrollUpBtn = document.getElementById("scroll-up");
            if(this.scrollY >=250){
                  scrollUpBtn.classList.remove("-bottom-1/2");
                  scrollUpBtn.classList.add("bottom-4");
            }else{
                scrollUpBtn.classList.add("-bottom-1/2");
                  scrollUpBtn.classList.remove("bottom-4");               
            }
        }
        window.addEventListener('scroll',scrollUp)
     </script>
    {{-- end script of scroll button --}}

    {{-- start script of swiper animation --}}
    <script>
    const swiper = new Swiper('.swiper', {
        speed: 400,
        spaceBetween: 30,
        a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
        },
        autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        },
        // Optional parameters
        // direction: 'vertical',
        // loop: true,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable:true,
        },
        grabCursor: true,
        breakpoints: {
            
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
     
    },
    // when window width is >= 10240px
    1024: {
      slidesPerView: 4,
    }
  }
      
        // Navigation arrows
        // navigation: {
        //   nextEl: '.swiper-button-next',
        //   prevEl: '.swiper-button-prev',
        // }
      
        // And if we need scrollbar
        // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
      });
    </script>
    {{-- end of swiper animation --}}


    {{-- start script of menu section link --}}
     <script>
       const tabs = document.querySelectorAll(".tabs_wrap ul li");
       const all = document.querySelectorAll('.item_wrap');
       const foods = document.querySelectorAll('.food');
       const beverages = document.querySelectorAll('.beverage');
       const snacks = document.querySelectorAll('.snack');
       tabs.forEach(tab =>{
        tab.addEventListener("click",() => {
            tabs.forEach(tab => {
                tab.classList.remove('active')
            })
            tab.classList.add('active')
            const tabval = tab.getAttribute('data-tabs')
            // console.log(tabval)
            all.forEach(item => {
                item.style.display = 'none'
            })
            if(tabval == 'food'){
                foods.forEach(item => {
                    item.style.display = 'block'
                })
            }
            else if(tabval == 'snack'){
                snacks.forEach(item => {
                    item.style.display = 'block'
                })
            }
            else if(tabval == 'beverage'){
                beverages.forEach(item =>{
                    item.style.display = 'block'
                })
            }
            else {
                all.forEach(item =>{
                    item.style.display = 'block'
                })
            }
        })
       })
       

     </script>
    {{-- end script of menu section link --}}

    {{-- start script of dark light theme --}}
    <script>
        const html = document.querySelector("html");
        const themeBtn = document.getElementById("theme-toggle");
        if(localStorage.getItem("mode") == "dark"){
            darkMode();
        }else{
            lightMode();
        }

        themeBtn.addEventListener("click", (e) => {
            if(localStorage.getItem("mode") == "light"){
                darkMode();
            }else{
                lightMode();
            }
            // html.classList.add("dark");
            // themeBtn.classList.replace("fa-moon", "fa-sun");
            // localStorage.setItem("mode","dark");
            
            // in body dark mode
            // event.preventDefault();
            //     document.documentElement.classList.toggle('dark');
            //     themeBtn.classList.replace("fa-moon", "fa-sun");
        })
        function darkMode(){
            html.classList.add("dark");
            themeBtn.classList.replace("fa-moon", "fa-sun");
            localStorage.setItem("mode","dark");
        }
        function lightMode(){
            html.classList.remove("dark");
            themeBtn.classList.replace("fa-sun","fa-moon");
            localStorage.setItem("mode","light");
        }
    </script>
    {{-- end script of dark light theme --}}
    {{-- start script of navbar close and open --}}
    <script>
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        const closeIcon = document.getElementById('nav-close');
        const navLinkClose = document.querySelectorAll('.nav-linkclose');
        hamburger.addEventListener("click", () => {
            navMenu.classList.remove('hidden')
        })
        closeIcon.addEventListener("click", () => {
            navMenu.classList.add('hidden')
        });
        navLinkClose.forEach(link =>
            link.addEventListener("click", () => {
                navMenu.classList.add(hidden)
            }))
    </script>
    {{-- end script of navbarclose and end --}}
</body>

</html>
