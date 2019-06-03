<?php  include 'header.php'?>
<html>
<body style="z-index: 998">
<div id="background">
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item rounded mx-auto d-block">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true" style="color: #efd77a; background-color: #292f33"><i class="fas fa-home fa-1x mr-3"></i>Home</a>


        </li>
        <li class="nav-item rounded mx-auto d-block">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false" style="color: #efd77a; background-color: #292f33"><i class="fas fa-play-circle fa-1x mr-3"></i> Vidéos</a>
        </li>
        <li class="nav-item rounded mx-auto d-block">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
               aria-selected="false" style="color: #efd77a; background-color: #292f33"><i class="far fa-images fa-1x mr-3"></i>Photos</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row spacer">
                <div class="col-4">
                    <img src="assets/img/twitch.png" class="img-fluid" style="width: 100px" alt="Responsive image">
                </div>
                <div class="col-8">

                </div>
            </div>


            <div id="twitch-embed" class="spacer spacerbottom"></div>
            <script src="https://embed.twitch.tv/embed/v1.js"></script>
            <script type="text/javascript">
                new Twitch.Embed("twitch-embed", {
                    width: "100%",
                    height: 600,
                    channel: "44322889",
                    theme: "dark",
                });
            </script>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row spacer">
                <div class="col-8">
                    <h3 class="bold" style="color: #F1F1F1"><strong>Apex Legends</strong></h3>
                </div>
                <div class="col-4">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle btn-sm float-right" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="background-color: #f18f26; color: white">
                           <strong>Autes jeux</strong>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
                            <button class="dropdown-item" type="button">Smite</button>
                            <button class="dropdown-item" type="button">Apex Legends</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spacer">
                <div class="col-md-6">
                    <video  class="embed-responsive embed-responsive-16by9" id="video" controls muted loop>
                        <source class="embed-responsive-item"  src="assets/video/Apex%C2%A0Legends™%20(2).mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-md-6">
                    <video  class="embed-responsive embed-responsive-16by9" id="video" controls muted loop>
                        <source class="embed-responsive-item" src="assets/video/Apex%C2%A0Legends™%20(3).mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="row spacer">
                <div class="col-md-6">
                    <video  class="embed-responsive embed-responsive-16by9" id="video" controls muted loop>
                        <source src="assets/video/Apex%C2%A0Legends™%20(4).mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6">
                    <video class="embed-responsive embed-responsive-16by9" id="video" controls muted loop>
                        <source src="assets/video/Apex%C2%A0Legends™%20(5).mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row spacer">
                <div class="col-6">
                    <img src="assets/img/Apex%C2%A0Legends™%20(2).png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-6">
                    <img src="assets/img/Apex%C2%A0Legends™.png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="row spacer">
                <div class="col-6">
                    <img src="assets/img/Apex%C2%A0Legends™%20(4).png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-6">
                    <img src="assets/img/Apex%C2%A0Legends™%20(5).png" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php  include 'footer.php' ?>

</body>
</html>

