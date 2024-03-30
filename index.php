
<?php
// Get the buffered content and assign it to $content
$pageContent = ob_get_clean();

// Include the layout
include('layout.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
</head>
<body>


<!--<a href="create.php">create a task</a>-->


<div class="banner-bottom clear">
    <div class="mid-content">
        <div class="video-left left">
            <img src="img/clock-night-time-illustration-midnight-old-backgrounds-generative-ai.jpg">
        </div>
        <div class="video-content-right right">
            <h3>Maximize Your Productivity: Task manager App</h3>
            <p>"Effortlessly manage your time with our Time Planner App. Stay organized, focused, and on track with intuitive task management features. Achieve your goals efficiently, while our app helps you make the most out of every moment.".</p>
        </div>
    </div>
</div>

<div class="service-section">
    <div class="mid-content">
        <div class="section-title text-center">
            <h1>Learn more about our application</h1>
            <p>Track time without wasting a second</p>
        </div>


        <div class="services-items clear mt-4">
            <div class="service-box left">
                <img src="img/1902.i039.011.P.m004.c30.cloud%20services%20isometric%20icons-13.jpg" alt="Image Description" class="sizable-image">
                <div class="s-content">
                    <h3>Database Integration</h3>
                    <p>: Utilize a database system such as MySQL to store task-related information efficiently</p>
                </div>
            </div>


            <div class="services-items clear">
                <div class="service-box left">
                    <img src="img/2952143.jpg" alt="Image Description" class="sizable-image">
                    <div class="s-content">
                        <h3>CRUD Operation</h3>
                        <p> Implement CRUD (Create, Read, Update, Delete) functionality to allow users to perform essential operations on tasks, enabling them to add new tasks, view existing ones, edit task details, and remove completed tasks.</p>
                    </div>
                </div>


                <div class="services-items clear">
                    <div class="service-box left">
                        <img src="img/61196.jpg" alt="Image Description" class="sizable-image">
                        <div class="s-content">
                            <h3>Responsive Design:</h3>
                            <p>Ensure the application is responsive across various devices and screen sizes, providing users with a consistent experience whether accessing the task manager from a desktop, tablet, or smartphone.</p>
                        </div>
                    </div>


                    <div class="services-items clear">
                        <div class="service-box left">
                            <img src="img/2101.i402.020_Computer_repair_404_flat_composition.jpg" alt="Image Description" class="sizable-image">
                            <div class="s-content">
                                <h3>Validation and Error Handling</h3>
                                <p> Implement form validation to validate user inputs and handle errors gracefully, providing informative messages to users in case of invalid inputs or failed operations.</p>
                            </div>
                        </div>


                        <div class="services-items clear">
                            <div class="service-box left">
                                <img src="img/representations-user-experience-interface-design.jpg" alt="Image Description" class="sizable-image">
                                <div class="s-content">
                                    <h3>User-Friendly Interface</h3>
                                    <p>Design an intuitive and user-friendly interface with clear navigation and interactive elements, enabling users to efficiently manage their tasks with minimal effort.</p>
                                </div>
                            </div>

                            <div class="services-items clear">
                                <div class="service-box left">
                                    <img src="img/4968099.jpg" alt="Image Description" class="sizable-image">
                                    <div class="s-content">
                                        <h3>User Authentication</h3>
                                        <p> Implement user authentication to ensure secure access to the task management system, allowing users to create, view, update, and delete tasks based on their privileges.</p>
                                    </div>
                                </div>

        </div>
    </div>
</div>

<!--End of learn more about our app-->
<!---->
<!--<div class="pricing-table-section">-->
<!--    <div class="mid-content">-->
<!--        <div class="section-title text-center">-->
<!--            <h2>Start using our app today </h2>-->
<!--            <p>Set of tools to seamlessly manage projects during their entire life cycle</p>-->
<!--        </div>-->
<!--        <div class="pricing-tables clear">-->
<!---->
<!--            <div class="pricing-table-item left">-->
<!--                <div class="p-heading">-->
<!--                    <h4>Free Version</h4>-->
<!--                    <h1> $ 0 <span>/ month</span> </h1>-->
<!--                    <h5>Who is this for? </h5>-->
<!--                    <p>Free version for students and regular users</p>-->
<!--                </div>-->
<!--                <div class="p-content">-->
<!--                    <ul>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Time Tracking</li>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Resource Planning</li>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Integrations</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Task Management</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Reporting</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Invoicing</li>-->
<!--                    </ul>-->
<!--                    <div class="p-button text-center">-->
<!--                        <a href="#" class="default-btn">Get Free Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pricing-table-item left">-->
<!--                <div class="p-heading">-->
<!--                    <h4>Free Version</h4>-->
<!--                    <h1> $ 0 <span>/ month</span> </h1>-->
<!--                    <h5>Who is this for? </h5>-->
<!--                    <p>Free version for students and regular users</p>-->
<!--                </div>-->
<!--                <div class="p-content">-->
<!--                    <ul>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Time Tracking</li>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Resource Planning</li>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Integrations</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Task Management</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Reporting</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Invoicing</li>-->
<!--                    </ul>-->
<!--                    <div class="p-button text-center">-->
<!--                        <a href="#" class="default-btn">Get Free Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pricing-table-item left">-->
<!--                <div class="p-heading">-->
<!--                    <h4>Free Version</h4>-->
<!--                    <h1> $ 0 <span>/ month</span> </h1>-->
<!--                    <h5>Who is this for? </h5>-->
<!--                    <p>Free version for students and regular users</p>-->
<!--                </div>-->
<!--                <div class="p-content">-->
<!--                    <ul>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Time Tracking</li>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Resource Planning</li>-->
<!--                        <li> <span><i class="fa fa-check" aria-hidden="true"></i></span> Integrations</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Task Management</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Reporting</li>-->
<!--                        <li> <span><i class="fa fa-times" aria-hidden="true"></i></span> Invoicing</li>-->
<!--                    </ul>-->
<!--                    <div class="p-button text-center">-->
<!--                        <a href="#" class="default-btn">Get Free Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="team-section">
    <div class="mid-content">
        <div class="section-title text-center">
            <h2>Our team is constantly trying for you</h2>
        </div>
        <div class="team-members clear">

            <div class="member left">
                <img src="img/5908.jpg" alt="">
                <div class="member-bio">
                    <h4>Jason Doe</h4>
                    <p>Programmer</p>
                </div>
            </div>
            <div class="member left">
                <img src="img/5908.jpg" alt="">
                <div class="member-bio">
                    <h4>Amanda Swon</h4>
                    <p>Programmer</p>
                </div>
            </div>
            <div class="member left">
                <img src="img/5908.jpg" alt="">
                <div class="member-bio">
                    <h4>Andrew Smith</h4>
                    <p>Programmer</p>
                </div>
            </div>
            <div class="member left">
                <img src="img/5908.jpg" alt="">
                <div class="member-bio">
                    <h4>Jane Olsen</h4>
                    <p>Programmer</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="newslatter-section p-bg">
    <div class="mid-content">
        <div class="section-title newslatter-title text-center">
            <p>Keep up to date with the latest updates</p>
            <h2>Subscribe to our newsletter</h2>
            <div class="newslatter-from">
                <form action="#">
                    <input type="email" class="default-input" placeholder="E-mail Address">
                    <button class="submit-btn" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="blog-section">
    <div class="mid-content">
        <div class="blog-title clear">
            <div class="b-hading left">
                <h2>What's new?</h2>
            </div>
            <div class="bt-content right">
                <p>We're excited to bring you a suite of new features, improvements, and fixes that make Task manager more intuitive, powerful, and tailored to your needs. </p>
            </div>
        </div>
        <div class="blog-items clear">
            <div class="blog-post-item left">
                <img src="https://i.ibb.co/WFCF1tn/02.jpg" alt="">
                <div class="blog-post-content">
                    <h3>Task Collaboration</h3>
                    <p> Collaborate on tasks with your teammates in real-time. Assign tasks, share updates, and communicate directly within each task for seamless coordination.</p>
                </div>
            </div>
            <div class="blog-post-item right">
                <img src="https://i.ibb.co/HzKWcfv/03.jpg" alt="">
                <div class="blog-post-content">
                    <h3>Customizable dashboards</h3>
                    <p>Personalize your dashboard with new widget options and layout choices, giving you the power to access the information you need, faster.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-section">
    <div class="mid-content">
        <div class="contact-row clear">
            <div class="content-left-map left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.15093168725!2d90.3492858556245!3d23.78062065337353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1592888156723!5m2!1sen!2sus" width="100%" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="content-right-form right">
                <h4>Contact us</h4>
                <p>Contact us if you have any questions and we will contact you. We appreciate user feedback and be sure to take into account your wishes.</p>
                <div class="footer-contact-from clear">
                    <form action="#">
                        <input type="emial" placeholder="Emial-Address" class="default-input w100">
                        <input type="text" placeholder="Name" class="default-input w50 left">
                        <input type="text" placeholder="Phone" class="default-input w50 right">
                        <textarea class="default-input w100" placeholder="Message"></textarea>
                        <button type="submit" class="submit-btn"> Send </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            <p>© Copyright 2024 By PARTH SHARMA - All Rights Reserved</p>
        </div>
    </div>
</div>

</body>
</html>