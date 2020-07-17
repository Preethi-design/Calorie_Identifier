<?php

$caloriefood = $_POST["caloriefood"];
require 'vendor/autoload.php';

$client=new MongoDB\Client;
$fooddb=$client->fooddb;
$foodcol=$fooddb->foodcol;

// $insertManyResult=$foodcol->insertMany([
//     ["foodname"=>"SWEET & SPICY PUMPKIN SEEDS","calories"=>"165", "ingredients" => "1 cup unsalted pumpkin seed kernels, 1 tablespoon canola oil, 1 teaspoon sugar, 1/2 teaspoon ground cumin, 1/2 teaspoon chipotle chile powder, 1/4 teaspoon kosher salt, 1/4 teaspoon ground cinnamon, Dash of ground red pepper", "instrutions" =>"1.Place 1 cup pumpkin seeds in a large skillet over medium heat. Cook for 4 minutes or until toasted, stirring constantly (seeds will pop slightly).2.Combine canola oil and remaining ingredients in a large bowl; add seeds, tossing to coat. Arrange seeds in a single layer on a paper towel-lined baking sheet. Cool 10 minutes. "],
//     ["foodname"=>"BAKED MOZZARELLA BITES","calories"=>"98", "ingredients" => "1/3 cup panko (Japanese breadcrumbs), 3 (1-ounce) sticks part-skim mozzarella string cheese, 3 tablespoons egg substitute, Cooking spray, 1/4 cup lower-sodium marinara sauce (such as McCutcheon‘s) ", "instrutions" =>   "1.Preheat oven to 425°F.2. Heat a medium skillet over medium heat. Add 1/3 cup panko to pan, and cook for 2 minutes or until toasted, stirring frequently. Remove from heat, and place the panko in a shallow dish. 3. Cut mozzarella sticks into 1-inch pieces. Working with one piece at a time, dip cheese in egg substitute; dredge in panko. Place cheese on a baking sheet coated with cooking spray. Bake at 425°F for 3 minutes or until the cheese is softened and thoroughly heated. 4. Pour the marinara sauce into a microwave-safe bowl. Microwave at HIGH 1 minute or until thoroughly heated, stirring after 30 seconds. Serve with mozzarella pieces.   "],
//     ["foodname"=>"APPAM","calories"=>"99", "ingredients" => "Boiled rice – 200 gms, Horse bean – 2 tsp, Fenugreek seeds - ¼ tsp  Salt - ¼ tsp, Coconut milk or tender coconut, water - 1 cup, Baking soda - ¼ tsp ", "instrutions" =>   "1.Preheat oven to 425°F.2. Heat a medium skillet over medium heat. Add 1/3 cup panko to pan, and cook for 2 minutes or until toasted, stirring frequently. Remove from heat, and place the panko in a shallow dish. 3. Cut mozzarella sticks into 1-inch pieces. Working with one piece at a time, dip cheese in egg substitute; dredge in panko. Place cheese on a baking sheet coated with cooking spray. Bake at 425°F for 3 minutes or until the cheese is softened and thoroughly heated. 4. Pour the marinara sauce into a microwave-safe bowl. Microwave at HIGH 1 minute or until thoroughly heated, stirring after 30 seconds. Serve with mozzarella pieces.   "],
//     ["foodname"=>"COCONUT RICE","calories"=>"290", "ingredients" => "Long grain rice – 1 cup, Coconut milk – 1 cup, Broken cashew bits – 1 tbsp, Green chilies, slit - 3, Stalk curry leaves - 1, Cumin seeds – ½ tsp, Mustard seeds – ½ tsp,Horsebean – 1 tsp, Grated fresh coconut – 2 tbsp, Coriander, chopped – 1 tbsp, Oil – 2 tbsp, Salt to taste,Lemon to taste. ", "instrutions" =>   "Soak 1 grated coconut in 2 1/2 cups water for 1 hour. Grind in a blender using same water.Strain to extract the milk. Repeat process with the residue twice. Press out till residue is crumbly. Use milk as mentioned later in recipe. Makes 3 cups milk.Wash and soak rice in salted water for 30 minutes.Drain rice in colander, keep water aside.Heat oil in a heavy saucepan. Add horsebean , seeds, cashews, stir till spluttering. Add chilies and curry leaves. Stir, add rice. Stir very gently, with a wide spatula till oil coats rice evenly.Add coconut milk, 1½ cups drained water. Add salt, keeping in mind the water was salted. Bring to a boil, reduce heat, simmer covered. Stir occasionally. When done 3/4, add lemon. Mix very gently. Simmer till done and all water evaporates. Add more water in between if required. Garnish with coriander and coconut before serving. Serve hot with raita, kadhi or rasam."],
//     ["foodname"=>"LIME JUICE","calories"=>"22", "ingredients" => "Water -1 cup, Fresh Lemon-1, Sugar- 2 table spoon, Ice cubes-3-4, Salt- a pinch ,Squeezer item-1  ", "instrutions" =>   "Firstly take lemon and cut into two equal half’s. With the help of squeezer item, squeeze the lemon juice into a glass from each half. Now add sugar, salt and water.Stir it properly until the sugar and salt content get dissolves.Lemon juice is ready to be served. Serve cool with the ice cubes."],
//     ["foodname"=>"RAVA IDLY","calories"=>"35", "ingredients" => " Horsebean – 1 tsp, Bengal gram– 1 tsp, Grated fresh coconut – 2 tbsp, Fresh curd – 500 gms, Oil & ghee – 2 tbsp, Coriander leaves – 2 tbsp, Cashew nuts – 5 - 7, Mustard seeds – 1 tsp, Asafetida – a pinch, Curry leaves – 10, Green chili – 2, Cooking soda – ¼ tsp,Salt to taste. ", "instrutions" =>   "Heat oil & ghee together, fry chopped cashew nuts to a golden brown. Set aside. Add mustard seeds, the pulses, asafoetida,curry leaves and chopped green chili. After it is well sautéed, add rawa. Roast well on a low flame till light pink. Add salt, soda-bicarb, coriander leaves, grated coconut, salt and fried cashew nuts. Cool.Mix in beaten curd to make idli batter."]
// ]);
        //printf("inserted %d documents",$insertManyResult->getInsertedCount());
        // var_dump($insertManyResult->getInsertedIds());

$var1 = $foodcol->find(["calories"=>"$caloriefood"]);

// foreach($var1 as $var2)
// {
//     var_dump($var2);
// }

// ?>
   
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr>
    <th>FOOD NAME</th>
    <th>CALORIE</th>
    <th>INGREDIENTS</th>
    <th>INSTRUCTIONS</th>
  </tr>
<tr>
    <?php foreach($var1 as $var2){?>
    <td><?php echo $var2["foodname"]?></td>
    <td><?php echo $var2["calories"]?></td>
    <td><?php echo $var2["ingredients"]?></td>
    <td><?php echo $var2["instrutions"] ?></td>
  </tr>
  </table>
  <?php } ?>
</body>
</html>
