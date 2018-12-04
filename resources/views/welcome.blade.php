<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Contact Form Demo Project</title>
        <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <main>
                
                
                
                
                <header>
                    <h1>Contact Form Demo Project</h1>
                </header>
                
                
                
                
                <form action="" method="post" id="app" novalidate="true">
                
                @csrf
                
                    <section>
                    
                        <form-group field="name" field-label="Name" is-required>
                            <input id="name" name="name" placeholder="Enter your full name">
                        </form-group>

                        <form-group field="email" field-label="Email" is-required>
                            <input id="email" name="email" placeholder="Enter your email address">
                        </form-group>

                        <form-group field="phone" field-label="Phone" is-required>
                            <input id="phone" name="phone" placeholder="Enter your phone number">
                        </form-group>
                        
                        <form-group field="subject" field-label="Subject of Inquiry">
                            <select id="subject" name="subject">
                                <option disabled selected value>&mdash; Please select one &mdash;</option>
                                <option>Technical support</option>
                                <option>Accounting and billing</option>
                                <option>Other</option>
                            </select>
                        </form-group>
                        
                    </section>
                    
                    <section>
                        
                        <form-group field="message" field-label="Your message">
                            <textarea id="message" name="message"></textarea>
                        </form-group>
                        
                    
                    </section>
                
                    <section>
                    
                        <div class="form-group">
                            <input type="submit" value="Submit" id="submit">
                            <p class="disclaimer"><span class="required">* Required Fields.</span> Please be aware that we cannot ensure that communications sent over the internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form.</p>
                        </div>
                    
                    </section>
                
                </form>
                
                
            </main>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>