@extends('layouts/main-app')


@section('content')


        <div class="container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d97225.05909508893!2d49.8308972!3d40.4025789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2sBaku%2C+Azerbaijan!5e0!3m2!1sen!2s!4v1489560496573" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Postcontent
					============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>{{Lang::get('Main.Contact.title')}}</h3>

                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form id="contact-form" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">{{Lang::get('Main.Contact.name')}} <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control " required />
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">{{Lang::get('Main.Contact.email')}} <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="email" value="" class="email sm-form-control" required / >
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">{{Lang::get('Main.Contact.phone')}}</label>
                                <input type="number" id="template-contactform-phone" name="phone" value="" class="sm-form-control " required />
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="template-contactform-subject">{{Lang::get('Main.Contact.subject')}} <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="subject" value="" class=" sm-form-control" required />
                            </div>
  

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">{{Lang::get('Main.Contact.msg')}} <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="msg"  rows="6" cols="30" required></textarea>
                            </div>


                            <div class="col_full">
                                <button class="button button-3d nomargin "  id="contact-submit" type="submit" >{{Lang::get('Main.Contact.button')}}</button>
                            </div>

                        </form>

                    </div>
                    <!-- .postcontent end -->


                </div>

            </div>

        </section>
        <!-- #content end -->

      <script type="text/javascript">
            $('#contact-form').on('submit',function(e){
                 $('.form-process').fadeIn();
                    e.preventDefault();
                    form = $('#contact-form').serialize();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}"
                        }
                    });

                    $.ajax({
                        url: '/contact',
                        type: 'POST',
                        data: form,
                        success: function (data) {
               if(data == 200){
                      $('.form-process').fadeOut();
                                swal({
                                    title: "Done!",
                                    type: 'success',
                                    text: "Send",
                                    timer: 1000,
                                    showConfirmButton: false
                                });
                                $('#contact-form').find('input').val('');
                                $('#contact-form').find('textarea').val('');
                      
                        }
                    }
                    });
                })
            </script>


@endsection


           



