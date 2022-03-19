<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
        <legend><h2>Contact Information</h2></legend>
        <!-- Name, Email, Phone, Genre(dropdown), subscription length(checkbox), agree to privacy -->

        <label>Full Name</label>
        <input class="inputbox" type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">
        <span class="error"><?php echo $name_err ;?></span>

        <label>Email</label>
        <input class="inputbox" type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
        <span class="error"><?php echo $email_err ;?></span>

        <label>Phone</label>
        <input class="inputbox" type="tel" name="phone" placeholder="XXX-XXX-XXXX" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
        <span class="error"><?php echo $phone_err ;?></span>

        <label>Subscription Length</label>
            <ul class="subUl">
                <li class="subLi">
                    <input type="radio" name="sub" value="1 Month" <?php if(isset($_POST['sub']) && $_POST['sub'] == '1 Month') echo 'checked = "checked"' ;?>>
                    <label>1 month<br>$14.99</label>
                </li>
                <li class="subLi">
                    <input type="radio" name="sub" value="3 Months" <?php if(isset($_POST['sub']) && $_POST['sub'] == '3 Months') echo 'checked = "checked"' ;?>>
                    <label>3 Months<br>$42.99<br><span style="color: red; font-size: 13px">5% off</span></label>
                </li>
                <li class="subLi">
                    <input type="radio" name="sub" value="6 Months" <?php if(isset($_POST['sub']) && $_POST['sub'] == '6 Months') echo 'checked = "checked"' ;?>>
                    <label>6 Months<br>$80.99<br><span style="color: red; font-size: 13px">10% off</span></label>
                </li>
                <li class="subLi">
                    <input type="radio" name="sub" value="12 Months" <?php if(isset($_POST['sub']) && $_POST['sub'] == '12 Months') echo 'checked = "checked"' ;?>>
                    <label>12 Months<br>$152.99<br><span style="color: red; font-size: 13px">15% off</span></label>
                </li>
            </ul>
            <span class="error"><?php echo $sub_err ;?></span>

        <label>Genre</label>
           <select classe="inputbox" name="genre">
                <option value="" NULL <?php if(isset($_POST['genre']) && $_POST['genre'] == NULL) echo 'selected = "unselected" ' ;?>>Select One</option>
                <option value="Hip-Hop"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'Hip-Hop') echo 'selected = "selected" ' ;?>>Hip-Hop</option>
                <option value="Rock"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'Rock') echo 'selected = "selected" ' ;?>>Rock</option>
                <option value="R&B"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'R&') echo 'selected = "selected" ' ;?>>R&B</option>
                <option value="Pop"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'Pop') echo 'selected = "selected" ' ;?>>Pop</option>
                <option value="Metal"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'Metal') echo 'selected = "selected" ' ;?>>Metal</option>
                <option value="Country"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'Country') echo 'selected = "selected" ' ;?>>Country</option>
                <option value="EDM"<?php if(isset($_POST['genre']) && $_POST['genre'] == 'EDM') echo 'selected = "selected" ' ;?>>EDM</option>
            </select>
            <span class="error"><?php echo $genre_err ;?></span>

        <label>First Box Additions<span style="font-size:small; font-weight:normal"><i> - optional</i></span></label>
        <ul>
            <li>
                <input type="checkbox" name="adds[]" value="Record Player" <?php if(isset($_POST['adds']) && in_array('Record Player', $adds)) echo 'checked = "checked"' ;?>>Record Player - $199.99            </li>
            <li>
                <input type="checkbox" name="adds[]" value="Record Player Needle" <?php if(isset($_POST['adds']) && in_array('Record Player Needle', $adds)) echo 'checked = "checked"' ;?>>Record Player Needle - $ 9.99
            </li>
            <li>
                <input type="checkbox" name="adds[]" value="Headphones" <?php if(isset($_POST['adds']) && in_array('Headphones', $adds)) echo 'checked = "checked"' ;?>>Headphones - $34.99
            </li>
            <li>
                <input type="checkbox" name="adds[]" value="RotM Vinyl Box" <?php if(isset($_POST['adds']) && in_array('RotM Vinyl Box', $adds)) echo 'checked = "checked"' ;?>>RotM Vinyl Storage Box - $11.99
            </li>
        </ul>

        <label>Agree To Our Privacy Policy<br><span style="font-size:small; font-weight:normal"><a href="https://tinyurl.com/3upz9z8v" target="_blank"><i>you can read our privacy policy here</i></a></span></label>
        <ul>
            <li>
                <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked"' ;?>>I agree
            </li>
        </ul>
        <span class="error"><?php echo $privacy_err ;?></span>
        <div>
        <input type="submit" value="Submit">
        <button><a href="" id="resetButton">Reset</a></button>
        </div>
    </fieldset>
</form>