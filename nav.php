<nav>
    <div>
        <?php
        print "<h2 class='name'>" . name . lastname . "</h2>";
        ?>
    </div>


    <div>
        <ul>
            <?php
            foreach ($nav as $Nav_element) {
                echo '<li><a  class=""><a href=".#About"' . $Nav_element . '" target="_bank">' . $Nav_element . '</li>';
            }
            ?>
        </ul>

    </div>
</nav>