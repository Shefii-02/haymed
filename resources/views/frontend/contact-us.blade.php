@extends('layouts.master')
@push('header')
    <style>
        .content+form {
            margin-top: 2rem
        }

        form {
            max-width: 35rem;
            margin-inline: auto;
            border: 1px solid #181717;
            padding: 30px;
        }

        form fieldset {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem
        }

        form fieldset .field {
            position: relative;

            width: 100%
        }

        form fieldset .field label {
            position: absolute;
            top: .5rem;
            left: .5rem;
            padding-inline: .5rem;
            color: #000000;
            transition: all .25s ease-in-out;
            background-color: inherit;
            border-radius: 10px;
            font-size: .7rem
        }

        form fieldset .field input,
        form fieldset .field textarea {
            border: 1px solid #181717;
            background-color: inherit;
            font-family: objektiv-mk2, sans-serif;
            font-size: .7rem;
            color: #000000;
            resize: none;
            width: 100%;
            height: 100%;
            padding: .5rem .75rem;
            border-radius: 30px
        }

        form fieldset .field input:focus,
        form fieldset .field textarea:focus {
            border-color: #000000;
            outline: none
        }

        form fieldset .field input:not(:placeholder-shown)+label,
        form fieldset .field input:focus+label,
        form fieldset .field textarea:not(:placeholder-shown)+label,
        form fieldset .field textarea:focus+label {
            top: -.65rem
        }




        form button {
            font-size: .8rem;
            padding: .5rem 1rem;
            margin-block: 1rem;
            display: flex;
            gap: 1rem;
            align-items: center;
            line-height: 1rem;
            width: max-content;
            border-radius: 30px;
            border: 2px solid #000000;
            color: #000000 !important;
            background-color: transparent;
            transition: all 250ms ease-in-out;
            cursor: pointer;
            margin-top: 1rem;
            margin-inline: auto 0;
            gap: 0
        }

        form button svg {
            margin-left: .5rem
        }

        form button svg path {
            fill: #000000;
            transition: all 250ms ease-in-out
        }

        form button:hover {
            background-color: #ffffff;
            color: #181717 !important;
            opacity: 1
        }

        form button:hover svg path {
            fill: #181717;
            transition: all 250ms ease-in-out
        }

        #form .alert {
            text-align: center
        }
    </style>
@endpush
@section('content')
    <section class='intro'>

        <div class='content'>
            <h1 class="text-white fw-bold">Contact us</h1>
        </div>
        <figure>
            <img src="/assets/img/banners/banner-03.jpeg" alt="A-Propos-Hero-Bg">
        </figure>


    </section>
    <section class='contact-intro'>

        <div class='content'>
            <h1 class="text-white fw-bold">Address</h1>
            <address>
                <h5>Heymed Healthcare Pvt. Ltd</h5>
                <a href="https://maps.app.goo.gl/uTidUdfoibL6BqbTA" target="_blank">
                    Edappal Pattambi Rd, Malappuram
                    Kerala, India
                </a>
                <a href="tel:+917907054120" class="flex gap-2 align-middle items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5" />
                    </svg>
                    +91 7907 054 120</a>
                <a href="mailto:haymedhealthcare@gmail.com" class="flex gap-2 align-middle items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                        <path
                            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                    haymedhealthcare@gmail.com</a>
            </address>
        </div>





        <figure>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7837.102135010873!2d76.031897!3d10.845627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7b73c80314e33%3A0x49cf3b197f4eaa49!2sHayath%20Medicare%20Hospital!5e0!3m2!1sen!2sin!4v1739538521934!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </figure>


    </section>


    <section id='form'>

        <div class="content">
            <h2>Contact Form</h2>
        </div>


        <form id="form-formspree" action="https://formspree.io/f/mzzpwkve" method="POST" enctype="multipart/form-data">
            <fieldset>

                <div class="field ">
                    <input type='text' id="name" name='name' placeholder=" " required>
                    <label for="name">Full Nome</label>
                </div>

                <div class="field ">
                    <input type='email' id='email' name='email' placeholder=" " required>
                    <label for="email">Email</label>
                </div>
                <div class="field ">
                    <textarea id='message' name='message' rows='6' placeholder=" " required></textarea>
                    <label for="message">Message</label>
                </div>
            </fieldset>
            <button type="submit">
                Submit
                <svg width="32" height="9" viewBox="0 0 38 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M33.2082 0.178985L37.0971 4.0679C37.3358 4.30654 37.3358 4.69346 37.0971 4.9321L33.2082 8.82102C32.9696 9.05966 32.5827 9.05966 32.344 8.82102C32.1054 8.58238 32.1054 8.19546 32.344 7.95682L35.1898 5.11109L-4.46825e-07 5.11108L-3.3998e-07 3.88892L35.1898 3.88892L32.344 1.04319C32.1054 0.804545 32.1054 0.417628 32.344 0.178985C32.5827 -0.0596579 32.9696 -0.0596579 33.2082 0.178985Z"
                        fill="#FF4438" />
                </svg>
            </button>
        </form>
    </section>
@endsection
