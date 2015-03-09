<?php include("headers.html"); ?>

        <div style="padding-top:100px">
            <h1 id="topic_heading" class="text-center" style="color:purple">My Profile</h1><br />
        </div>
    </div><!-- USER PROFILE INFO-->

    <hr size="6" />  

    <main role="main">
        <div class="center jGrowl" id="growl_section"></div>

        <div class="container-flex px2">
            <form accept-charset="UTF-8" action="/profile" class=
            "form-simple form-stacked form-light" enctype="multipart/form-data"
            id="edit_user_14355912" method="post" name="edit_user_14355912">

                <div class="row">
                    <fieldset class="col-md-6">
                        <ul class="h5">
                            <li class="py1"><label class="bold" for=
                            "user_name">Name</label> <input class=
                            "input-text full-width text" id="user_name" name=
                            "user[name]" type="text" value=
                            "Scarlettg" /></li>

                            <li class="py1">
                                <label class="bold" style="color:purple" for=
                                "user_Picture">Picture</label>

                                <div class="">
                                    <div class="user photo">
                                        <img alt="..." src="..." />

                                        <div class="caption">                                        

                                            <p>My photo.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="py1"><label class="bold" for=
                            "user_biography">Biography</label> 
                            <textarea class="input-textarea textarea"  rows="4"
                            style="height: auto">I am a student at u of t.</textarea> 
                            <span class="grey-dark">We suggest a short bio. If it's 300
characters or less it'll look great on your profile.</span></li>
                        </ul>
                    </fieldset>

                    <fieldset class="col-md-6">
                        <ul class="h5">
                            <li class="location py1"><label class="bold" for=
                            "user_location_name">Location</label> <input class=
                            "input-text full-width text" type="text" value=
                            "Toronto Canada" /><span class="grey-dark">Your
                            location is displayed on your
                            profile.</span><br />
                            </li>
                            <br>
                            <li class="virtual url py1">
                                <label class="bold" for=
                                "user_virtual_url">Virtrual URL</label>
                                <br>
                                <a class="btn btn-primary btn-lg" href=
                                "www.abc.com" type="button">Send me there</a>
                                <br><br>
                                <span class="grey-dark">This is the link to
                                your virtual url.</span><br />
                            </li>
                            <br>
                            <li class="py1">
                                <label class="bold" for="user_name">Email</label>
                                <a href="abc@gmail.com">My email</a> <span class=
                                "grey-dark">Your email is displayed on your
                                profile.</span>
                            </li>
                        </ul>
                    </fieldset>
                </div>
            </form>
        </div>
    </main>

<?php include("footers.html"); ?>