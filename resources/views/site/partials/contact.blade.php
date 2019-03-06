<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.5906533223547!2d-90.04507598550056!3d29.962450929397548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620a62c33198c89%3A0x2e160a6e35877f12!2sPizza+Delicious!5e0!3m2!1suk!2sua!4v1551789687782"
                        width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Contact Us</h3>
                <form action="{{route('contacts.store')}}" method="POST" class="appointment-form">
                    @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="d-me-flex">
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="3" class="form-control"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-4">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
