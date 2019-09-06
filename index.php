<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <!-- This is just the default style package for the carousel library that I used -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <!-- <title>Snyder Recordings</title>
</head>
<body> -->
    <!-- HEADER -->
    <?php get_header(); ?>
    
    <div class="wrapper">
        <!-- HERO SECTION -->
        <section class="hero">
            <div class="hero-cont">
                <div class="hero-block">
                    <h1 class="hero-headline">A.M. Paradox</h1>
                    <p class="hero-sub">Christopher Brent Wood, better known by his stage name Brent Faiyaz, is an American singer and record producer. He released his debut project, an extended play entitled A.M. Paradox, in 2016.</p>
                    <div class="video-cta">
                        <img src="wp-content/uploads/2019/09/playbutton.svg" alt="Watch Video">
                        <span>Watch Video</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- ARTIST BIO -->
        <section class="artist-bio">
            <div class="bio-pic"></div>
            <div class="bio-text">
                <h2 class="bio-headline">Brent Faiyaz, So Far Gone</h2>
                <p class="bio-summary">Faiyaz began uploading his music onto SoundCloud in 2014 and moved from his hometown Columbia, Maryland to Charlotte, North Carolina before ultimately settling in Los Angeles, California to further his music career. On January 19, 2015, he released his debut single "Allure".[4] On June 1, 2016, Faiyaz released "Invite Me", the lead single from his upcoming debut EP. On September 19, 2016, his 21st birthday, the EP entitled A.M. Paradox was released and received with positive reviews from music critics. On January 26, 2017, Sonder released their debut EP into.</p>
                <a href="#" class="cta">Learn More</a>
            </div>

        </section>
        <!-- NEW RELEASES -->
        <section class="new-releases">
            <h2>New Releases</h2>
            <p>New albums every single month, check out the newest & best from Snyder Recording artist, now available on Apple Music & Spotify.</p>  
            <div class="swiper-container">  
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-left-panel">
                                <img src="wp-content/uploads/2019/09/trapsoul.png" alt="Trapsoul">
                            </div>
                            <div class="slide-right-panel">
                                <h3>Trapsoul</h3>
                                <h4>Bryson Tiller</h4>
                                <p>Bryson Djuan Tiller, is an American singer, songwriter and rapper. Born in Louisville, Kentucky, he started his career in 2011, releasing the debut mixtape titled Killer instinct Vol.1.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-left-panel">
                                <img src="wp-content/uploads/2019/09/trapsoul.png" alt="Trapsoul">
                            </div>
                            <div class="slide-right-panel">
                                <h3>Trapsoul</h3>
                                <h4>Bryson Tiller</h4>
                                <p>Bryson Djuan Tiller, is an American singer, songwriter and rapper. Born in Louisville, Kentucky, he started his career in 2011, releasing the debut mixtape titled Killer instinct Vol.1.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-left-panel">
                                <img src="wp-content/uploads/2019/09/trapsoul.png" alt="Trapsoul">
                            </div>
                            <div class="slide-right-panel">
                                <h3>Trapsoul</h3>
                                <h4>Bryson Tiller</h4>
                                <p>Bryson Djuan Tiller, is an American singer, songwriter and rapper. Born in Louisville, Kentucky, he started his career in 2011, releasing the debut mixtape titled Killer instinct Vol.1.</p>
                            </div>
                        </div>     
                    </div>
            </div>
            <div class="swiper-nav">
                <button class="previous"></button>
                <button class="next"></button>
             </div>
        </section>
        <!-- GOOGLE MAP -->
        <section id="map">
            <?php echo get_field('map', 13) ?>
        </section>
        <!-- CONTACT FORM -->
        <section class="contact">
            <form action="#">
                <h2>Get In Touch</h2>
                <p>New Albums every single month, check out the newest & best from Snyder Recording artist, now available on Apple Music & Spotify.</p>
                <div class="form-block">
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                </div>
                <div class="form-block">
                    <input type="email" placeholder="Email address" required>
                    <div class="select-wrapper">
                        <select name="reason">
                            <option value="default">Reason For Contacting</option>
                            <option value="support">Support</option>
                            <option value="inquiry">Contract Inquiry</option>
                            <option value="hi">Saying Hi</option>
                        </select>
                    </div>
                </div>
                <div class="form-block">
                    <textarea name="message" rows="7" placeholder="Write a brief message..."></textarea>
                </div>
                <div class="form-block">
                    <button type="submit">Send Message</button>
                </div>
            </form>
            <aside></aside>
        </section>
        <!-- FOOTER -->
        <?php get_footer() ?>
