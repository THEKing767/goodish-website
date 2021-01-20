<?php
    $Ms = false;
    include 'header.php';
    if (isset($_POST['sub'])) {
        include 'signupphp.php';
    }
?>          
        <style>
        .com {
            border-bottom: white 1px solid;
        }
        </style>
        <main>
            <div class='wrappera'>
                <h1 class="bac">BeLogicus's<br>Art <br>competion</h1>
                <center><form name='acompform' class='formcomp' method='POST'>
                    <p class='NOP'>
                    <input type='text' name='name' required="" class="NOPC" placeholder="Name of Participant" /></label>
                    </p>
                    <p class='EOP'>
                    <input type='email' name='email'required="" class="EOPC" placeholder="Email of Participant"/></label>
                    </p>
                    <p class='EOPG'>
                    <input type='email' name='email2'required='' class="EOPGC" placeholder="Email of Participant's Guardian"/></label>
                    </p>
                    <p class='signb'>
                    <button type='submit' class='signb1' name='sub'>Submit</button>
                    </p>
                </form></center>
            </div>
        </main>
<?php
include 'footer.php';
?>