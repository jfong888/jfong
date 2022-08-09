<?php

$anime = array(
   array("Naruto", 184 ,"Kiba's Long Day!"),
   array("Naruto", 185 , "A Legend from the Hidden Leaf - The Onbaa!"),
   array("Naruto", 186 , "Laughing Shino"),
   array("Naruto", 187 , "Open for Business! The Leaf Moving Service"),
   array("Naruto", 188 , "Mystery of the Targeted Merchants"),
   array("Naruto", 189 , "A Limitless Supply of Ninja Tools"),
   array("Naruto", 190 , "The Byakugan Sees the Blind Spot"),
   array("Naruto", 191 , "Forecast Death! Cloudy with Chance of Sun"),
   array("Naruto", 192 , "Ino Screams! Chubby Paradise!"),
   array("Naruto", 193 , "Viva Dojo Challenge! Youth Is All About Passion!"),
   array("Naruto", 194 , "The Mysterious Curse of the Haunted Castle"),
   array("Naruto", 195 , "The Third Super-Beast!"),
   array("Naruto", 196 , "Hot-Blooded Confrontation - Student vs. Sensei"),
   array("Naruto", 197 , "Crisis! The Hidden Leaf 11 Gather!"),
   array("Naruto", 198 , "The ANBU Gives Up? Naruto's Recollection"),
   array("Naruto", 199 , "The Missed Target"),
   array("Naruto", 200 , "The Powerful Helper"),
   array("Naruto", 201 , "Multiple Traps! Countdown to Destruction"),
   array("Naruto", 202 , "The Top 5 Ninja Battles"),
);

foreach ($anime as $element) {
    echo "<option value=\"".$element[0].":".$element[1].":".$element[2]."\">".$element[2]."</option>";
}
?>