<section class="service-block" id="services">
    <div class="container">
        <!-- <div class="row gy-4">
            <div class="col-6 col-md-3 item background-style">
                <div class="icon">

                </div>
                <div class="content text-center">
                    <h3 class="title mb-4 mt-4">Protect Business</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-3 item background-style actived">
                <div class="icon">

                </div>
                <div class="content text-center">
                    <h3 class="title mb-4 mt-4">Optimize IT systems</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-3 item background-style">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                        <path fill="none" stroke="#1173ED" strokeLinecap="round" strokeLinejoin="round" d="M10.75 5.5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5M9.933 8v1.534c0 .39.155.766.432 1.042c.276.277.744.432 1.135.432H.5c.391 0 .859-.155 1.135-.432a1.47 1.47 0 0 0 .432-1.042V5.933A3.933 3.933 0 0 1 6 2M5 13.5h2"></path>
                    </svg>
                </div>
                <div class="content text-center">
                    <h3 class="title mb-4 mt-4">Digital Enablement</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-3 item background-style">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.4rem" height="2.4rem" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1173ED" strokeLinecap="round" strokeLinejoin="round" strokeWidth={0.9}>
                            <path d="M19.5 7A9 9 0 0 0 12 3a8.99 8.99 0 0 0-7.484 4"></path>
                            <path d="M11.5 3a17 17 0 0 0-1.826 4M12.5 3a17 17 0 0 1 1.828 4M19.5 17a9 9 0 0 1-7.5 4a8.99 8.99 0 0 1-7.484-4"></path>
                            <path d="M11.5 21a17 17 0 0 1-1.826-4m2.826 4a17 17 0 0 0 1.828-4M2 10l1 4l1.5-4L6 14l1-4m10 0l1 4l1.5-4l1.5 4l1-4M9.5 10l1 4l1.5-4l1.5 4l1-4"></path>
                        </g>
                    </svg>
                </div>
                <div class="content text-center">
                    <h3 class="title mb-4 mt-4">Website, App</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
                </div>
            </div>
        </div> -->

        <div class="swiper services">
            <div class="swiper-wrapper">
                <?php
                $services = [
                    [
                        'title' => 'Protect Business',
                        'image' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">   <path fill="#1173ED" d="M5 4.604v9.185a4 4 0 0 0 1.781 3.328L12 20.597l5.219-3.48A4 4 0 0 0 19 13.79V4.604L12 3.05zM3.783 2.826L12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976M12 13.5l-2.939 1.545l.561-3.272l-2.377-2.318l3.286-.478L12 6l1.47 2.977l3.285.478l-2.377 2.318l.56 3.272z"></path>
                        </svg>',
                        'desc' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco labo commodo consequat sint occaecatproident, sunt in culpa.',
                    ],
                    [
                        'title' => 'Optimize IT systems',
                        'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="2.4rem" height="2.4rem" viewBox="0 0 32 32">
                        <path fill="#1173ED" d="M29 25h-2v-2h1v-4h-4v1h-2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1"></path>
                        <path fill="#1173ED" d="M24 30h-6a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1m-5-2h4v-4h-4zm-4-8.142A3.993 3.993 0 1 1 20 16h2a6 6 0 1 0-7 5.91z"></path>
                        <path fill="#1173ED" d="m28.89 13.55l-2.31 2.03l-1.42-1.42l2.41-2.12l-2.36-4.08l-3.44 1.16a9.4 9.4 0 0 0-2.7-1.57L18.36 4h-4.72l-.71 3.55a8.9 8.9 0 0 0-2.71 1.57L6.79 7.96l-2.36 4.08l2.72 2.39a8.9 8.9 0 0 0 0 3.13l-2.72 2.4l2.36 4.08l3.44-1.16a9.4 9.4 0 0 0 2.7 1.57l.71 3.55H15v2h-1.36a2 2 0 0 1-1.96-1.61l-.51-2.52a11 11 0 0 1-1.31-.75l-2.43.82a2 2 0 0 1-.64.1a1.97 1.97 0 0 1-1.73-1L2.7 20.96a2 2 0 0 1 .41-2.51l1.92-1.68C5.01 16.51 5 16.26 5 16s.02-.51.04-.76l-1.93-1.69a2 2 0 0 1-.41-2.51l2.36-4.08a1.97 1.97 0 0 1 1.73-1a2 2 0 0 1 .64.1l2.42.82a12 12 0 0 1 1.32-.75l.51-2.52A2 2 0 0 1 13.64 2h4.72a2 2 0 0 1 1.96 1.61l.51 2.52a11 11 0 0 1 1.31.75l2.43-.82a2 2 0 0 1 .64-.1a1.97 1.97 0 0 1 1.73 1l2.36 4.08a2 2 0 0 1-.41 2.51"></path>
                    </svg>',
                        'desc' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco labo commodo consequat sint occaecatproident, sunt in culpa.',
                    ],

                    [
                        'title' => 'Digital Enablement',
                        'image' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                        <path fill="none" stroke="#1173ED" strokeLinecap="round" strokeLinejoin="round" d="M10.75 5.5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5M9.933 8v1.534c0 .39.155.766.432 1.042c.276.277.744.432 1.135.432H.5c.391 0 .859-.155 1.135-.432a1.47 1.47 0 0 0 .432-1.042V5.933A3.933 3.933 0 0 1 6 2M5 13.5h2"></path>
                    </svg>',
                        'desc' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco labo commodo consequat sint occaecatproident, sunt in culpa.',
                    ],

                    [
                        'title' => 'Website, App',
                        'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="2.4rem" height="2.4rem" viewBox="0 0 24 24">
                        <g fill="none" stroke="#1173ED" strokeLinecap="round" strokeLinejoin="round" strokeWidth={0.9}>
                            <path d="M19.5 7A9 9 0 0 0 12 3a8.99 8.99 0 0 0-7.484 4"></path>
                            <path d="M11.5 3a17 17 0 0 0-1.826 4M12.5 3a17 17 0 0 1 1.828 4M19.5 17a9 9 0 0 1-7.5 4a8.99 8.99 0 0 1-7.484-4"></path>
                            <path d="M11.5 21a17 17 0 0 1-1.826-4m2.826 4a17 17 0 0 0 1.828-4M2 10l1 4l1.5-4L6 14l1-4m10 0l1 4l1.5-4l1.5 4l1-4M9.5 10l1 4l1.5-4l1.5 4l1-4"></path>
                        </g>
                    </svg>',
                        'desc' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco labo commodo consequat sint occaecatproident, sunt in culpa.',
                    ],
                ];
                foreach ($services as $index => $service) :
                ?>
                    <div class="swiper-slide background-style">
                        <div class="item">
                            <div class="icon">
                                <?= $service['image']; ?>
                            </div>
                            <div class="content text-center">
                                <h3 class="title mb-1 mb-md-4 mt-0 mt-md-4"><?= $service['title']; ?></h3>
                                <p>
                                    <?= $service['desc']; ?>
                                </p>
                            </div>
                        </div>
                        <!-- 
                        <div class="d-sm-flex align-items-center">
                            <figure class="avatar">
                                <div class="border-container"></div>
                                <img src="<?= getImageAsset($review['image']); ?>" alt="<?= $review['name']; ?>">
                            </figure>
                            <div class="info">
                                <h3 class="name"><?= $review['name']; ?></h3>
                                <p class="expertise"><?= $review['expertise']; ?></p>
                            </div>
                        </div>
                        <div class="review">
                            
                        </div>
                        <div class="shield">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21 11c0 5.55-3.84 10.74-9 12c-5.16-1.26-9-6.45-9-12V5l9-4l9 4zm-9 10c3.75-1 7-5.46 7-9.78V6.3l-7-3.12L5 6.3v4.92C5 15.54 8.25 20 12 21m3.05-5l-3.08-1.85L8.9 16l.81-3.5L7 10.16l3.58-.31l1.39-3.3l1.4 3.29l3.58.31l-2.72 2.35z"></path>
                            </svg>
                        </div> -->
                    </div>
                <?php
                endforeach
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>