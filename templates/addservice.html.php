
    <section id="contact">
	<div class="container">


<div class="row" id="contact-outer">
                <!--bootstrap class, using flex layout, justify and align items center for placing them on center-->
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <!--for inner contact area-->
                    <div class="contact-inner px-5">
                        <!--contact icon and text to align at center, bootstrap class-->
                        <div class="contact-icon text-center py-5">
                            <!--font awesome icon for handshake-->
                            <h6> <i class="far fa-handshake fa-4x"></i></h6>
                        </div>
                        <!--warning to fill all the fields, i was going to use marquee here, but not sure about the validation.-->
                        <h6 class="mb-2 p-1 text-danger border border-warning rounded">N.B. All the fields are
                            required</h6>
                        <!--form area starts-->
                        <!--id form for the form area-->
                        <form id="myForm">
                            <!--form group class for the items in the form-->
                            <div class="form-group ">
                                <!--input items grouping-->
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <!--icon for name field-->
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <!--input area for name-->
                                    <input type="text" class="form-control" id="user-name" placeholder="Name" required>
                                </div>
                            </div>
                            <!--for phone number field-->
                            <div class="form-group ">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <!--phone icon-->
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                    </div>
                                    <!--phone number field input-->
                                    <input type="tel" class="form-control" id="user-phone" placeholder="Number"
                                        required>
                                </div>
                            </div>
                            <!--for email field-->
                            <div class="form-group ">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <!--envelope icon for email field-->
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    <!--input placeholder for email field-->
                                    <input type="email" class="form-control " placeholder="Email" id="user-mail"
                                        required>
                                </div>
                            </div>
                            <!--for message area-->
                            <div class="form-group ">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <!--writing icon for message area.-->
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </div>
                                    <!--input area for message field-->
                                    <input class="form-control" placeholder="message..." id="user-msg" required>
                                </div>
                            </div>
                            <br>
                            <!--this is for the modal window after clicking the send button.
                            #linked with the javascript. When this is clicked, either a successful message will pop up with a modal window or
                        # an error message will pop up with a modal window-->
                            <input id="modal-btn" type="button" value="send" class="btn  btn-block btn-lg">
                        </form>
                        <!--form ends here-->
                    </div>
                </div>
            </div>
        </div>


    </section>