<section class="gallery" id="gallery">
    <div class="container">
        <h2>Портфолио</h2>

        <div class="row">
            <div class="card-list">

                <?
                $photo = $db->query("SELECT * FROM `photo` ORDER BY `photo`.`date` ASC LIMIT 8");

                foreach ($photo as $row) {
                    ?>
                    <div class="card-item">
                            <header>
                                <a href="../assets/images/<?=$row['src']?>" data-fancybox="images">
                                    <img src="../assets/images/<?=$row['src']?>" />
                                </a>
                            </header>
                            <footer>
                                <div class="like">
                                    <svg width="32"  height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path data-id="<?=$row['likes']?>" d="M29.4614 3.53613C27.8049 1.7395 25.532 0.75 23.0608 0.75C21.2136 0.75 19.522 1.33398 18.0327 2.4856C17.2812 3.06689 16.6003 3.77808 16 4.60815C15.3999 3.77832 14.7188 3.06689 13.967 2.4856C12.478 1.33398 10.7864 0.75 8.93921 0.75C6.46802 0.75 4.19482 1.7395 2.53833 3.53613C0.901611 5.31177 0 7.73755 0 10.3669C0 13.0732 1.00854 15.5505 3.17383 18.1633C5.11084 20.5005 7.89478 22.873 11.1187 25.6204C12.2195 26.5586 13.4673 27.6221 14.7629 28.7549C15.1052 29.0547 15.5444 29.2197 16 29.2197C16.4553 29.2197 16.8948 29.0547 17.2366 28.7554C18.5322 27.6223 19.7808 26.5583 20.8821 25.6196C24.1055 22.8728 26.8894 20.5005 28.8264 18.1631C30.9917 15.5505 32 13.0732 32 10.3667C32 7.73755 31.0984 5.31177 29.4614 3.53613Z" fill="url(#paint0_linear)"/>
                                        <defs>
                                        <linearGradient id="paint0_linear" x1="16" y1="0.75" x2="16" y2="29.2197" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F81F01"/>
                                        <stop offset="1" stop-color="#EE076E"/>
                                        </linearGradient>
                                        </defs>
                                    </svg>
                                    <span data-id="<?=$row['id']?>"><?=$row['likes']?></span>
                                </div>
                                <div class="date">
                                    <span><?=$row['date']?></span>
                                </div>
                            </footer>
                        </div>
                    <?
                }
                ?>    
                
            </div>
        </div>
        <a href="allphoto.php" class="btn">Посмотреть все</a>
    </div>
</section>