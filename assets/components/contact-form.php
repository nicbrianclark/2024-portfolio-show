

<!-- FORM and SPONSORS to include on pages -->
 
<div id="contact_form_container">
        <h1>Contact Us</h1>
        <form action="/contact.php" method="POST" id="contact_form" class="grid">

       

            <!-- Name -->
            <!-- <div class="flex-row"> -->
                <label class="namehead" for="name">Name:</label>
                <input type="text" id="contact_name" name="contactname" placeholder="Jane Doe">
            <!-- </div> -->

            <!-- Email -->
            <!-- <div class="flex-row"> -->
                <label for="email" class="emailhead">Email:</label>
                <input type="text" id="contact_email" name="contactemail" placeholder="username@email.com">
            <!-- </div> -->

            <!-- Subject -->
            <!-- <div class="flex-row"> -->
                <label for="subject" class="subjecthead">Subject:</label>
                <input type="text" id="contact_subject" name="contactsubject" placeholder="Subject">
            <!-- </div> -->

            <!-- Student Email -->
            <!-- <div class="flex-row"> -->
                <label for="studentemails" class="studenthead">Student (if applicable):</label>
                <select name="studentemails" id="student_emails">
                    <option value="studentname">Student Name</option>
                    <option value="darbysumner">Darby Sumner designbydarbs@gmail.com</option>
                    <option value="ashleymiles">Ashley Miles ashleymiles@dolvadadesign.com</option>
                    <option value="ashleygrant">Ashley Grant ashleyg.dtd@gmail.com</option>
                    <option value="angelinaminshall">Angelina Minshall rgbgardens@gmail.com</option>
                    <option value="tatumbaldwin">Tatum Baldwin design@transcendentdesignstudio.com</option>
                    <option value="charlisizemore">Charlie Sizemore cassevendesign@gmail.com</option>
                    <option value="maggieidzikowska">Maggie Idzikowska magda.wild.design@gmail.com</option>
                    <option value="madeleineleahy">Madeleine Leahy leahygraphics@gmail.com</option>
                    <option value="krismcllvenna">Kris Mcllvenna kris@gbrfoods.com</option>
                    <option value="sarahgephart">Sarah Gephart sarah@sassytoast.com</option>
                    <option value="andreashepherd">Andrea Shepherd hildegun75@gmail.com</option>
                    <option value="hunterkorsen">Hunter Korsen hunterkorsen@gmail.com</option>
                    <option value="carsonspencer">Carson Spencer carsonteall@gmail.com</option>
                </select>
            <!-- </div> -->

            <!-- Message -->
            <!-- <div class="flex-col"> -->
                <label for="message" class="messagehead">Your Message:</label>
                <textarea name="message" id="contact_message" placeholder="Your message" cols="30" rows="10"></textarea>
            <!-- </div> -->
            <!-- Submit -->
            <a type="submit" value="Submit" id="submit_form" class="submit_button">Submit</a>
        </form>
    </div>

    <div class="our-sponsors">
        <!-- header -->
        <h3>Thank you to our sponsors!</h3>
        <!-- images -->
        <div class="sponsor-logos">
            <div>
                <img class="sponsor-logo" src="./assets/images/momentum-ink-logo.svg" alt="momentum ink logo">
            </div>
            <div>
                <img class="sponsor-logo" src="./assets/images/momentum-ink-logo.svg" alt="sponsor 2 logo">
            </div>
            <div>
                <img class="sponsor-logo" src="./assets/images/momentum-ink-logo.svg" alt="sponsor 3 logo">
            </div>   
        </div>
    </div>
