<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipes')->delete();
        
        \DB::table('recipes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tmdb_id' => 52768,
                'name' => 'Apple Frangipan Tart',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Preheat the oven to 200C/180C Fan/Gas 6.
Put the biscuits in a large re-sealable freezer bag and bash with a rolling pin into fine crumbs. Melt the butter in a small pan, then add the biscuit crumbs and stir until coated with butter. Tip into the tart tin and, using the back of a spoon, press over the base and sides of the tin to give an even layer. Chill in the fridge while you make the filling.
Cream together the butter and sugar until light and fluffy. You can do this in a food processor if you have one. Process for 2-3 minutes. Mix in the eggs, then add the ground almonds and almond extract and blend until well combined.
Peel the apples, and cut thin slices of apple. Do this at the last minute to prevent the apple going brown. Arrange the slices over the biscuit base. Spread the frangipane filling evenly on top. Level the surface and sprinkle with the flaked almonds.
Bake for 20-25 minutes until golden-brown and set.
Remove from the oven and leave to cool for 15 minutes. Remove the sides of the tin. An easy way to do this is to stand the tin on a can of beans and push down gently on the edges of the tin.
Transfer the tart, with the tin base attached, to a serving plate. Serve warm with cream, crème fraiche or ice cream.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wxywrq1468235067.jpg',
                'tags' => '[1,2,3]',
                'youtube_url' => 'https://www.youtube.com/watch?v=rp8Slv4INLk',
                'ingredients' => '[1,2,3,4,5,6,7,8,9]',
                'measurements' => '[1,2,3,2,2,4,2,5,6]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            1 => 
            array (
                'id' => 2,
                'tmdb_id' => 52893,
                'name' => 'Apple & Blackberry Crumble',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Heat oven to 190C/170C fan/gas 5. Tip the flour and sugar into a large bowl. Add the butter, then rub into the flour using your fingertips to make a light breadcrumb texture. Do not overwork it or the crumble will become heavy. Sprinkle the mixture evenly over a baking sheet and bake for 15 mins or until lightly coloured.
Meanwhile, for the compote, peel, core and cut the apples into 2cm dice. Put the butter and sugar in a medium saucepan and melt together over a medium heat. Cook for 3 mins until the mixture turns to a light caramel. Stir in the apples and cook for 3 mins. Add the blackberries and cinnamon, and cook for 3 mins more. Cover, remove from the heat, then leave for 2-3 mins to continue cooking in the warmth of the pan.
To serve, spoon the warm fruit into an ovenproof gratin dish, top with the crumble mix, then reheat in the oven for 5-10 mins. Serve with vanilla ice cream.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xvsurr1511719182.jpg',
                'tags' => '[4]',
                'youtube_url' => 'https://www.youtube.com/watch?v=4vhcOwVBDO4',
                'ingredients' => '[10,5,2,11,2,12,13,14,15]',
                'measurements' => '[7,8,8,9,10,10,7,11,12]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            2 => 
            array (
                'id' => 3,
                'tmdb_id' => 53049,
                'name' => 'Apam balik',
                'category_id' => 1,
                'area_id' => 2,
                'instructions' => 'Mix milk, oil and egg together. Sift flour, baking powder and salt into the mixture. Stir well until all ingredients are combined evenly.

Spread some batter onto the pan. Spread a thin layer of batter to the side of the pan. Cover the pan for 30-60 seconds until small air bubbles appear.

Add butter, cream corn, crushed peanuts and sugar onto the pancake. Fold the pancake into half once the bottom surface is browned.

Cut into wedges and best eaten when it is warm.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/adxcbq1619787919.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=6R8ffRRJcrg',
                'ingredients' => '[16,17,18,19,20,21,22,23,24]',
                'measurements' => '[13,14,4,15,16,17,18,19,20]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            3 => 
            array (
                'id' => 4,
                'tmdb_id' => 53050,
                'name' => 'Ayam Percik',
                'category_id' => 2,
                'area_id' => 2,
                'instructions' => 'In a blender, add the ingredients for the spice paste and blend until smooth.
Over medium heat, pour the spice paste in a skillet or pan and fry for 10 minutes until fragrant. Add water or oil 1 tablespoon at a time if the paste becomes too dry. Don\'t burn the paste. Lower the fire slightly if needed.
Add the cloves, cardamom, tamarind pulp, coconut milk, water, sugar and salt. Turn the heat up and bring the mixture to boil. Turn the heat to medium low and simmer for 10 minutes. Stir occasionally. It will reduce slightly. This is the marinade/sauce, so taste and adjust seasoning if necessary. Don\'t worry if it\'s slightly bitter. It will go away when roasting.
When the marinade/sauce has cooled, pour everything over the chicken and marinate overnight to two days.
Preheat the oven to 425 F.
Remove the chicken from the marinade. Spoon the marinade onto a greased (or aluminum lined) baking sheet. Lay the chicken on top of the sauce (make sure the chicken covers the sauce and the sauce isn\'t exposed or it\'ll burn) and spread the remaining marinade on the chicken. Roast for 35-45 minutes or until internal temp of the thickest part of chicken is at least 175 F.
Let chicken rest for 5 minutes. Brush the chicken with some of the oil. Serve chicken with the sauce over steamed rice (or coconut rice).',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/020z181619788503.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=9ytR28QK6I8',
                'ingredients' => '[25,26,27,28,29,30,31,32,33,34,35,23,36]',
                'measurements' => '[21,22,23,21,24,25,23,23,23,25,26,5,27]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            4 => 
            array (
                'id' => 5,
                'tmdb_id' => 52767,
                'name' => 'Bakewell tart',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'To make the pastry, measure the flour into a bowl and rub in the butter with your fingertips until the mixture resembles fine breadcrumbs. Add the water, mixing to form a soft dough.
Roll out the dough on a lightly floured work surface and use to line a 20cm/8in flan tin. Leave in the fridge to chill for 30 minutes.
Preheat the oven to 200C/400F/Gas 6 (180C fan).
Line the pastry case with foil and fill with baking beans. Bake blind for about 15 minutes, then remove the beans and foil and cook for a further five minutes to dry out the base.
For the filing, spread the base of the flan generously with raspberry jam.
Melt the butter in a pan, take off the heat and then stir in the sugar. Add ground almonds, egg and almond extract. Pour into the flan tin and sprinkle over the flaked almonds.
Bake for about 35 minutes. If the almonds seem to be browning too quickly, cover the tart loosely with foil to prevent them burning.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wyrqqq1468233628.jpg',
                'tags' => '[1,2,5]',
                'youtube_url' => 'https://www.youtube.com/watch?v=1ahpSTf_Pvk',
                'ingredients' => '[10,37,38,39,2,5,7,40,8,9]',
                'measurements' => '[1,28,29,30,31,31,31,32,33,6]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            5 => 
            array (
                'id' => 6,
                'tmdb_id' => 52792,
                'name' => 'Bread and Butter Pudding',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Grease a 1 litre/2 pint pie dish with butter.
Cut the crusts off the bread. Spread each slice with on one side with butter, then cut into triangles.
Arrange a layer of bread, buttered-side up, in the bottom of the dish, then add a layer of sultanas. Sprinkle with a little cinnamon, then repeat the layers of bread and sultanas, sprinkling with cinnamon, until you have used up all of the bread. Finish with a layer of bread, then set aside.
Gently warm the milk and cream in a pan over a low heat to scalding point. Don\'t let it boil.
Crack the eggs into a bowl, add three quarters of the sugar and lightly whisk until pale.
Add the warm milk and cream mixture and stir well, then strain the custard into a bowl.
Pour the custard over the prepared bread layers and sprinkle with nutmeg and the remaining sugar and leave to stand for 30 minutes.
Preheat the oven to 180C/355F/Gas 4.
Place the dish into the oven and bake for 30-40 minutes, or until the custard has set and the top is golden-brown.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xqwwpy1483908697.jpg',
                'tags' => '[4,6]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Vz5W1-BmOE4',
                'ingredients' => '[2,41,42,14,16,43,18,23,44]',
                'measurements' => '[34,35,36,37,38,39,40,34,41]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            6 => 
            array (
                'id' => 7,
                'tmdb_id' => 52803,
                'name' => 'Beef Wellington',
                'category_id' => 3,
                'area_id' => 1,
                'instructions' => 'Put the mushrooms into a food processor with some seasoning and pulse to a rough paste. Scrape the paste into a pan and cook over a high heat for about 10 mins, tossing frequently, to cook out the moisture from the mushrooms. Spread out on a plate to cool.
Heat in a frying pan and add a little olive oil. Season the beef and sear in the hot pan for 30 secs only on each side. (You don\'t want to cook it at this stage, just colour it). Remove the beef from the pan and leave to cool, then brush all over with the mustard.
Lay a sheet of cling film on a work surface and arrange the Parma ham slices on it, in slightly overlapping rows. With a palette knife, spread the mushroom paste over the ham, then place the seared beef fillet in the middle. Keeping a tight hold of the cling film from the edge, neatly roll the Parma ham and mushrooms around the beef to form a tight barrel shape. Twist the ends of the cling film to secure. Chill for 15-20 mins to allow the beef to set and keep its shape.
Roll out the puff pastry on a floured surface to a large rectangle, the thickness of a £1 coin. Remove the cling film from the beef, then lay in the centre. Brush the surrounding pastry with egg yolk. Fold the ends over, the wrap the pastry around the beef, cutting off any excess. Turn over, so the seam is underneath, and place on a baking sheet. Brush over all the pastry with egg and chill for about 15 mins to let the pastry rest.
Heat the oven to 200C, 400F, gas 6.
Lightly score the pastry at 1cm intervals and glaze again with beaten egg yolk. Bake for 20 minutes, then lower the oven setting to 180C, 350F, gas 4 and cook for another 15 mins. Allow to rest for 10-15 mins before slicing and serving with the side dishes of your choice. The beef should still be pink in the centre when you serve it.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vvpprx1487325699.jpg',
                'tags' => '[7,8]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FS8u1RBdf6I',
                'ingredients' => '[45,46,47,48,49,50,19,51]',
                'measurements' => '[42,43,44,45,46,47,48,49]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            7 => 
            array (
                'id' => 8,
                'tmdb_id' => 52807,
                'name' => 'Baingan Bharta',
                'category_id' => 4,
                'area_id' => 3,
            'instructions' => 'Rinse the baingan (eggplant or aubergine) in water. Pat dry with a kitchen napkin. Apply some oil all over and
keep it for roasting on an open flame. You can also grill the baingan or roast in the oven. But then you won\'t get
the smoky flavor of the baingan. Keep the eggplant turning after a 2 to 3 minutes on the flame, so that its evenly
cooked. You could also embed some garlic cloves in the baingan and then roast it.
2. Roast the aubergine till its completely cooked and tender. With a knife check the doneness. The knife should slid
easily in aubergines without any resistance. Remove the baingan and immerse in a bowl of water till it cools
down.
3. You can also do the dhungar technique of infusing charcoal smoky flavor in the baingan. This is an optional step.
Use natural charcoal for this method. Heat a small piece of charcoal on flame till it becomes smoking hot and red.
4. Make small cuts on the baingan with a knife. Place the red hot charcoal in the same plate where the roasted
aubergine is kept. Add a few drops of oil on the charcoal. The charcoal would begin to smoke.
5. As soon as smoke begins to release from the charcoal, cover the entire plate tightly with a large bowl. Allow the
charcoal smoke to get infused for 1 to 2 minutes. The more you do, the more smoky the baingan bharta will
become. I just keep for a minute. Alternatively, you can also do this dhungar method once the baingan bharta is
cooked, just like the way we do for Dal Tadka.
6. Peel the skin from the roasted and smoked eggplant.
7. Chop the cooked eggplant finely or you can even mash it.
8. In a kadai or pan, heat oil. Then add finely chopped onions and garlic.
9. Saute the onions till translucent. Don\'t brown them.
10. Add chopped green chilies and saute for a minute.
11. Add the chopped tomatoes and mix it well.
12. Bhuno (saute) the tomatoes till the oil starts separating from the mixture.
13. Now add the red chili powder. Stir and mix well.
14. Add the chopped cooked baingan.
15. Stir and mix the chopped baingan very well with the onion­tomato masala mixture.
16. Season with salt. Stir and saute for some more 4 to 5 minutes more.
17. Finally stir in the coriander leaves with the baingan bharta or garnish it with them. Serve Baingan Bharta with
phulkas, rotis or chapatis. It goes well even with bread, toasted or grilled bread and plain rice or jeera rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/urtpqw1487341253.jpg',
                'tags' => '[9,10,11]',
                'youtube_url' => 'https://www.youtube.com/watch?v=-84Zz2EP4h4',
                'ingredients' => '[52,53,54,55,56,57,17,58,21]',
                'measurements' => '[50,51,27,52,32,11,53,54,55]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            8 => 
            array (
                'id' => 9,
                'tmdb_id' => 52812,
                'name' => 'Beef Brisket Pot Roast',
                'category_id' => 3,
                'area_id' => 4,
                'instructions' => '1 Prepare the brisket for cooking: On one side of the brisket there should be a layer of fat, which you want. If there are any large chunks of fat, cut them off and discard them. Large pieces of fat will not be able to render out completely.
Using a sharp knife, score the fat in parallel lines, about 3/4-inch apart. Slice through the fat, not the beef. Repeat in the opposite direction to make a cross-hatch pattern.
Salt the brisket well and let it sit at room temperature for 30 minutes.

2 Sear the brisket: You\'ll need an oven-proof, thick-bottomed pot with a cover, or Dutch oven, that is just wide enough to hold the brisket roast with a little room for the onions.
Pat the brisket dry and place it, fatty side down, into the pot and place it on medium high heat. Cook for 5-8 minutes, lightly sizzling, until the fat side is nicely browned. (If the roast seems to be cooking too fast, turn the heat down to medium. You want a steady sizzle, not a raging sear.)
Turn the brisket over and cook for a few minutes more to brown the other side.

3 Sauté the onions and garlic: When the brisket has browned, remove it from the pot and set aside. There should be a couple tablespoons of fat rendered in the pot, if not, add some olive oil.
Add the chopped onions and increase the heat to high. Sprinkle a little salt on the onions. Sauté, stirring often, until the onions are lightly browned, 5-8 minutes. Stir in the garlic and cook 1-2 more minutes.

4 Return brisket to pot, add herbs, stock, bring to simmer, cover, cook in oven: Preheat the oven to 300°F. Use kitchen twine to tie together the bay leaves, rosemary and thyme.
Move the onions and garlic to the sides of the pot and nestle the brisket inside. Add the beef stock and the tied-up herbs. Bring the stock to a boil on the stovetop.
Cover the pot, place the pot in the 300°F oven and cook for 3 hours. Carefully flip the brisket every hour so it cooks evenly.

5 Add carrots, continue to cook: After 3 hours, add the carrots. Cover the pot and cook for 1 hour more, or until the carrots are cooked through and the brisket is falling-apart tender.
6 Remove brisket to cutting board, tent with foil: When the brisket is falling-apart tender, take the pot out of the oven and remove the brisket to a cutting board. Cover it with foil. Pull out and discard the herbs.
7 Make sauce (optional): At this point you have two options. You can serve as is, or you can make a sauce with the drippings and some of the onions. If you serve as is, skip this step.
To make a sauce, remove the carrots and half of the onions, set aside and cover them with foil. Pour the ingredients that are remaining into the pot into a blender, and purée until smooth. If you want, add 1 tablespoon of mustard to the mix. Put into a small pot and keep warm.
8 Slice the meat across the grain: Notice the lines of the muscle fibers of the roast. This is the "grain" of the meat. Slice the meat perpendicular to these lines, or across the grain (cutting this way further tenderizes the meat), in 1/4-inch to 1/2-inch slices.
Serve with the onions, carrots and gravy. Serve with mashed, roasted or boiled potatoes, egg noodles or polenta.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ursuup1487348423.jpg',
                'tags' => '[7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=gh48wM6bPWQ',
                'ingredients' => '[59,21,53,55,60,61,62,63,64,65,66]',
                'measurements' => '[56,44,57,58,59,59,60,61,62,30,63]',
                'created_at' => '2025-04-15 09:39:13',
                'updated_at' => '2025-04-15 09:39:13',
            ),
            9 => 
            array (
                'id' => 10,
                'tmdb_id' => 52824,
                'name' => 'Beef Sunday Roast',
                'category_id' => 3,
                'area_id' => 1,
                'instructions' => 'Cook the Broccoli and Carrots in a pan of boiling water until tender.

Roast the Beef and Potatoes in the oven for 45mins, the potatoes may need to be checked regularly to not overcook.

To make the Yorkshire puddings:
Heat oven to 230C/fan 210C/gas 8. Drizzle a little sunflower oil evenly into 2 x 4-hole Yorkshire pudding tins or a 12-hole non-stick muffin tin and place in the oven to heat through
To make the batter, tip 140g plain flour into a bowl and beat in four eggs until smooth. Gradually add 200ml milk and carry on beating until the mix is completely lump-free. Season with salt and pepper. Pour the batter into a jug, then remove the hot tins from the oven. Carefully and evenly pour the batter into the holes. Place the tins back in the oven and leave undisturbed for 20-25 mins until the puddings have puffed up and browned. Serve immediately.

Plate up and add the Gravy as desired.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ssrrrs1503664277.jpg',
                'tags' => '[12]',
                'youtube_url' => 'https://www.youtube.com/watch?v=2l3-dBdNehY',
                'ingredients' => '[67,68,66,64,10,18,16,69]',
                'measurements' => '[64,65,66,66,67,60,13,68]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            10 => 
            array (
                'id' => 11,
                'tmdb_id' => 52826,
                'name' => 'Braised Beef Chilli',
                'category_id' => 3,
                'area_id' => 5,
                'instructions' => 'Preheat the oven to 120C/225F/gas mark 1.

Take the meat out of the fridge to de-chill. Pulse the onions and garlic in a food processor until finely chopped. Heat 2 tbsp olive oil in a large casserole and sear the meat on all sides until golden.

Set to one side and add another small slug of oil to brown the chorizo. Remove and add the onion and garlic, spices, herbs and chillies then cook until soft in the chorizo oil. Season with salt and pepper and add the vinegar, tomatoes, ketchup and sugar.

Put all the meat back into the pot with 400ml water (or red wine if you prefer), bring up to a simmer and cook, covered, in the low oven.

After 2 hours, check the meat and add the beans. Cook for a further hour and just before serving, pull the meat apart with a pair of forks.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uuqvwu1504629254.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=z4kSoJgsu6Y',
                'ingredients' => '[67,70,55,47,71,31,72,73,74,62,75,76,77,78,79,80,81]',
                'measurements' => '[69,57,70,44,9,37,37,5,50,57,71,72,73,74,75,75,76]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            11 => 
            array (
                'id' => 12,
                'tmdb_id' => 52834,
                'name' => 'Beef stroganoff',
                'category_id' => 3,
                'area_id' => 6,
                'instructions' => 'Heat the olive oil in a non-stick frying pan then add the sliced onion and cook on a medium heat until completely softened, so around 15 mins, adding a little splash of water if they start to stick at all. Crush in the garlic and cook for a 2-3 mins further, then add the butter. Once the butter is foaming a little, add the mushrooms and cook for around 5 mins until completely softened. Season everything well, then tip onto a plate.
Tip the flour into a bowl with a big pinch of salt and pepper, then toss the steak in the seasoned flour. Add the steak pieces to the pan, splashing in a little oil if the pan looks particularly dry, and fry for 3-4 mins, until well coloured. Tip the onions and mushrooms back into the pan. Whisk the crème fraîche, mustard and beef stock together, then pour into the pan. Cook over a medium heat for around 5 mins. Scatter with parsley, then serve with pappardelle or rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/svprys1511176755.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=PQHgQX1Ss74',
                'ingredients' => '[47,70,55,2,45,48,10,82,46,63,83]',
                'measurements' => '[77,32,78,30,79,47,80,81,30,82,83]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            12 => 
            array (
                'id' => 13,
                'tmdb_id' => 52842,
                'name' => 'Broccoli & Stilton soup',
                'category_id' => 5,
                'area_id' => 1,
                'instructions' => 'Heat the rapeseed oil in a large saucepan and then add the onions. Cook on a medium heat until soft. Add a splash of water if the onions start to catch.

Add the celery, leek, potato and a knob of butter. Stir until melted, then cover with a lid. Allow to sweat for 5 minutes. Remove the lid.

Pour in the stock and add any chunky bits of broccoli stalk. Cook for 10 – 15 minutes until all the vegetables are soft.

Add the rest of the broccoli and cook for a further 5 minutes. Carefully transfer to a blender and blitz until smooth. Stir in the stilton, allowing a few lumps to remain. Season with black pepper and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tvvxpv1511191952.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_HgVLpmNxTY',
                'ingredients' => '[84,53,85,86,66,2,87,68,88]',
                'measurements' => '[84,85,32,86,87,88,89,90,67]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            13 => 
            array (
                'id' => 14,
                'tmdb_id' => 52848,
                'name' => 'Bean & Sausage Hotpot',
                'category_id' => 6,
                'area_id' => 1,
                'instructions' => 'In a large casserole, fry the sausages until brown all over – about 10 mins.

Add the tomato sauce, stirring well, then stir in the beans, treacle or sugar and mustard. Bring to the simmer, cover and cook for 30 mins. Great served with crusty bread or rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vxuyrx1511302687.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=B0YX0yPX4Wo',
                'ingredients' => '[89,90,91,92,46]',
                'measurements' => '[91,92,93,77,5]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            14 => 
            array (
                'id' => 15,
                'tmdb_id' => 52855,
                'name' => 'Banana Pancakes',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'In a bowl, mash the banana with a fork until it resembles a thick purée. Stir in the eggs, baking powder and vanilla.
Heat a large non-stick frying pan or pancake pan over a medium heat and brush with half the oil. Using half the batter, spoon two pancakes into the pan, cook for 1-2 mins each side, then tip onto a plate. Repeat the process with the remaining oil and batter. Top the pancakes with the pecans and raspberries.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sywswr1511383814.jpg',
                'tags' => '[13,14,15]',
                'youtube_url' => 'https://www.youtube.com/watch?v=kSKtb2Sv-_U',
                'ingredients' => '[93,18,20,94,17,95,96]',
                'measurements' => '[50,94,95,96,5,18,97]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            15 => 
            array (
                'id' => 16,
                'tmdb_id' => 52873,
                'name' => 'Beef Dumpling Stew',
                'category_id' => 3,
                'area_id' => 1,
                'instructions' => 'Preheat the oven to 180C/350F/Gas 4.

For the beef stew, heat the oil and butter in an ovenproof casserole and fry the beef until browned on all sides.

Sprinkle over the flour and cook for a further 2-3 minutes.

Add the garlic and all the vegetables and fry for 1-2 minutes.

Stir in the wine, stock and herbs, then add the Worcestershire sauce and balsamic vinegar, to taste. Season with salt and freshly ground black pepper.

Cover with a lid, transfer to the oven and cook for about two hours, or until the meat is tender.

For the dumplings, sift the flour, baking powder and salt into a bowl.
Add the suet and enough water to form a thick dough.

With floured hands, roll spoonfuls of the dough into small balls.

After two hours, remove the lid from the stew and place the balls on top of the stew. Cover, return to the oven and cook for a further 20 minutes, or until the dumplings have swollen and are tender. (If you prefer your dumplings with a golden top, leave the lid off when returning to the oven.)

To serve, place a spoonful of mashed potato onto each of four serving plates and top with the stew and dumplings. Sprinkle with chopped parsley.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uyqrrv1511553350.jpg',
                'tags' => '[8,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=6NgheY-r5t0',
                'ingredients' => '[47,2,67,10,55,70,85,64,86,97,98,63,99,60,83,10,20,100,36]',
                'measurements' => '[25,18,98,84,99,100,81,81,101,102,103,47,4,20,104,97,5,8,105]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            16 => 
            array (
                'id' => 17,
                'tmdb_id' => 52874,
                'name' => 'Beef and Mustard Pie',
                'category_id' => 3,
                'area_id' => 1,
                'instructions' => 'Preheat the oven to 150C/300F/Gas 2.
Toss the beef and flour together in a bowl with some salt and black pepper.
Heat a large casserole until hot, add half of the rapeseed oil and enough of the beef to just cover the bottom of the casserole.
Fry until browned on each side, then remove and set aside. Repeat with the remaining oil and beef.
Return the beef to the pan, add the wine and cook until the volume of liquid has reduced by half, then add the stock, onion, carrots, thyme and mustard, and season well with salt and pepper.
Cover with a lid and place in the oven for two hours.
Remove from the oven, check the seasoning and set aside to cool. Remove the thyme.
When the beef is cool and you\'re ready to assemble the pie, preheat the oven to 200C/400F/Gas 6.
Transfer the beef to a pie dish, brush the rim with the beaten egg yolks and lay the pastry over the top. Brush the top of the pastry with more beaten egg.
Trim the pastry so there is just enough excess to crimp the edges, then place in the oven and bake for 30 minutes, or until the pastry is golden-brown and cooked through.
For the green beans, bring a saucepan of salted water to the boil, add the beans and cook for 4-5 minutes, or until just tender.
Drain and toss with the butter, then season with black pepper.
To serve, place a large spoonful of pie onto each plate with some green beans alongside.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sytuqu1511553755.jpg',
                'tags' => '[7,16]',
                'youtube_url' => 'https://www.youtube.com/watch?v=nMyBC9staMU',
                'ingredients' => '[67,10,84,98,63,53,64,60,65,51,50,101,2,21,102]',
                'measurements' => '[69,25,25,13,106,107,101,108,25,40,42,9,18,95,95]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            17 => 
            array (
                'id' => 18,
                'tmdb_id' => 52878,
                'name' => 'Beef and Oyster pie',
                'category_id' => 3,
                'area_id' => 1,
                'instructions' => 'Season the beef cubes with salt and black pepper. Heat a tablespoon of oil in the frying pan and fry the meat over a high heat. Do this in three batches so that you don’t overcrowd the pan, transferring the meat to a large flameproof casserole dish once it is browned all over. Add extra oil if the pan seems dry.
In the same pan, add another tablespoon of oil and cook the shallots for 4-5 minutes, then add the garlic and fry for 30 seconds. Add the bacon and fry until slightly browned. Transfer the onion and bacon mixture to the casserole dish and add the herbs.
Preheat the oven to 180C/350F/Gas 4.
Pour the stout into the frying pan and bring to the boil, stirring to lift any stuck-on browned bits from the bottom of the pan. Pour the stout over the beef in the casserole dish and add the stock. Cover the casserole and place it in the oven for 1½-2 hours, or until the beef is tender and the sauce is reduced.
Skim off any surface fat, taste and add salt and pepper if necessary, then stir in the cornflour paste. Put the casserole dish on the hob – don’t forget that it will be hot – and simmer for 1-2 minutes, stirring, until thickened. Leave to cool.
Increase the oven to 200C/400F/Gas 6. To make the pastry, put the flour and salt in a very large bowl. Grate the butter and stir it into the flour in three batches. Gradually add 325ml/11fl oz cold water – you may not need it all – and stir with a round-bladed knife until the mixture just comes together. Knead the pastry lightly into a ball on a lightly floured surface and set aside 250g/9oz for the pie lid.
Roll the rest of the pastry out until about 2cm/¾in larger than the dish you’re using. Line the dish with the pastry then pile in the filling, tucking the oysters in as well. Brush the edge of the pastry with beaten egg.
Roll the remaining pastry until slightly larger than your dish and gently lift over the filling, pressing the edges firmly to seal, then trim with a sharp knife. Brush with beaten egg to glaze. Put the dish on a baking tray and bake for 25-30 minutes, or until the pastry is golden-brown and the filling is bubbling.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wrssvt1511556563.jpg',
                'tags' => '[16]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ONX74yP6JnI',
                'ingredients' => '[67,47,103,55,104,60,99,105,63,106,107,10,21,2,18]',
                'measurements' => '[109,20,57,99,97,110,4,111,106,25,24,42,95,79,112]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            18 => 
            array (
                'id' => 19,
                'tmdb_id' => 52891,
                'name' => 'Blackberry Fool',
                'category_id' => 1,
                'area_id' => 1,
            'instructions' => 'For the biscuits, preheat the oven to 200C/180C (fan)/Gas 6 and line two large baking trays with baking parchment. Scatter the nuts over a baking tray and roast in the oven for 6-8 minutes, or until golden-brown. Watch them carefully so that they don’t have a chance to burn. Remove from the oven, tip onto a board and leave to cool.
Put the butter and sugar in a large bowl and beat with a wooden spoon until light and creamy. Roughly chop the cooled nuts and add to the creamed butter and sugar, along with the lemon zest, flour and baking powder. Stir well until the mixture comes together and forms a ball – you may need to use your hands.
Divide the biscuit dough into 24 even pieces and roll into small balls. Place the balls the prepared baking trays, spaced well apart to allow for spreading.
Press the biscuits to flatten to around 1cm/½in thick. Bake the biscuits, one tray at a time, for 12 minutes or until very pale golden-brown. Leave to cool on the trays. They will be very soft when you take them out of the oven, but will crisp as they cool.
Store in an airtight tin and eat within five days.
For the fool, rinse the blackberries in a colander to wash away any dust or dirt. Put the blackberries in a non-stick saucepan and sprinkle over the caster sugar.
Stir in the lemon juice and heat gently for two minutes, or until the blackberries begin to soften and release their juices. Remove and reserve 12 blackberries for decoration and continue cooking the rest.
Simmer the blackberries very gently for 15 minutes, stirring regularly until very soft and squidgy. Remove from the heat and press the berries and juice through a sieve over a bowl, using the bottom of a ladle to help you extract as much of the purée as possible. Leave the purée to cool and discard the seeds. You should end up with around 325ml/11fl oz of purée.
Put the cream and yoghurt in a large bowl and whip with an electric whisk until soft peaks form when the whisk is removed from the bowl – the acidity of the fruit will thicken the cream further, so don’t take it too far.
When the purée is completely cold, adjust the sweetness to taste by adding more sugar if needed. Pour it into the bowl with the whipped cream and yoghurt and stir just once or twice until very lightly combined.
Spoon the blackberry fool into individual wide, glass dishes – or one large, single bowl. It should look quite marbled, so don’t over-stir it. Scatter a few tiny mint leaves on top and decorate with the reserved blackberries. Sprinkle with a little sugar if you like and serve with the hazelnut biscuits.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rpvptu1511641092.jpg',
                'tags' => '[14,17,3,18]',
                'youtube_url' => 'https://www.youtube.com/watch?v=kniRGjDLFrQ',
                'ingredients' => '[108,2,5,109,10,20,13,23,5,110,43,111,112]',
                'measurements' => '[113,97,81,114,81,33,115,116,25,117,118,82,119]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            19 => 
            array (
                'id' => 20,
                'tmdb_id' => 52894,
                'name' => 'Battenberg Cake',
                'category_id' => 1,
                'area_id' => 1,
            'instructions' => 'Heat oven to 180C/160C fan/gas 4 and line the base and sides of a 20cm square tin with baking parchment (the easiest way is to cross 2 x 20cm-long strips over the base). To make the almond sponge, put the butter, sugar, flour, ground almonds, baking powder, eggs, vanilla and almond extract in a large bowl. Beat with an electric whisk until the mix comes together smoothly. Scrape into the tin, spreading to the corners, and bake for 25-30 mins – when you poke in a skewer, it should come out clean. Cool in the tin for 10 mins, then transfer to a wire rack to finish cooling while you make the second sponge.
For the pink sponge, line the tin as above. Mix all the ingredients together as above, but don’t add the almond extract. Fold in some pink food colouring. Then scrape it all into the tin and bake as before. Cool.
To assemble, heat the jam in a small pan until runny, then sieve. Barely trim two opposite edges from the almond sponge, then well trim a third edge. Roughly measure the height of the sponge, then cutting from the well-trimmed edge, use a ruler to help you cut 4 slices each the same width as the sponge height. Discard or nibble leftover sponge. Repeat with pink cake.
Take 2 x almond slices and 2 x pink slices and trim so they are all the same length. Roll out one marzipan block on a surface lightly dusted with icing sugar to just over 20cm wide, then keep rolling lengthways until the marzipan is roughly 0.5cm thick. Brush with apricot jam, then lay a pink and an almond slice side by side at one end of the marzipan, brushing jam in between to stick sponges, and leaving 4cm clear marzipan at the end. Brush more jam on top of the sponges, then sandwich remaining 2 slices on top, alternating colours to give a checkerboard effect. Trim the marzipan to the length of the cakes.
Carefully lift up the marzipan and smooth over the cake with your hands, but leave a small marzipan fold along the bottom edge before you stick it to the first side. Trim opposite side to match size of fold, then crimp edges using fingers and thumb (or, more simply, press with prongs of fork). If you like, mark the 10 slices using the prongs of a fork.
Assemble second Battenberg and keep in an airtight box or well wrapped in cling film for up to 3 days. Can be frozen for up to a month.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ywwrsp1511720277.jpg',
                'tags' => '[19,15]',
                'youtube_url' => 'https://www.youtube.com/watch?v=aB41Q7kDZQ0',
                'ingredients' => '[2,5,113,114,20,18,94,8,2,5,113,114,20,18,94,8,115,116,117,118]',
                'measurements' => '[100,100,67,113,33,120,33,11,100,100,67,113,33,120,33,11,33,102,69,48]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            20 => 
            array (
                'id' => 21,
                'tmdb_id' => 52904,
                'name' => 'Beef Bourguignon',
                'category_id' => 3,
                'area_id' => 7,
                'instructions' => 'Heat a large casserole pan and add 1 tbsp goose fat. Season the beef and fry until golden brown, about 3-5 mins, then turn over and fry the other side until the meat is browned all over, adding more fat if necessary. Do this in 2-3 batches, transferring the meat to a colander set over a bowl when browned.
In the same pan, fry the bacon, shallots or pearl onions, mushrooms, garlic and bouquet garni until lightly browned. Mix in the tomato purée and cook for a few mins, stirring into the mixture. This enriches the bourguignon and makes a great base for the stew. Then return the beef and any drained juices to the pan and stir through.
Pour over the wine and about 100ml water so the meat bobs up from the liquid, but isn’t completely covered. Bring to the boil and use a spoon to scrape the caramelised cooking juices from the bottom of the pan – this will give the stew more flavour.
Heat oven to 150C/fan 130C/gas 2. Make a cartouche: tear off a square of foil slightly larger than the casserole, arrange it in the pan so it covers the top of the stew and trim away any excess foil. Then cook for 3 hrs. If the sauce looks watery, remove the beef and veg with a slotted spoon, and set aside. Cook the sauce over a high heat for a few mins until the sauce has thickened a little, then return the beef and vegetables to the pan.
To make the celeriac mash, peel the celeriac and cut into cubes. Heat the olive oil in a large frying pan. Tip in the celeriac and fry for 5 mins until it turns golden. Season well with salt and pepper. Stir in the rosemary, thyme, bay and cardamom pods, then pour over 200ml water, enough to nearly cover the celeriac. Turn the heat to low, partially cover the pan and leave to simmer for 25-30 mins.
After 25-30 mins, the celeriac should be soft and most of the water will have evaporated. Drain away any remaining water, then remove the herb sprigs, bay and cardamom pods. Lightly crush with a potato masher, then finish with a glug of olive oil and season to taste. Spoon the beef bourguignon into serving bowls and place a large spoonful of the celeriac mash on top. Garnish with one of the bay leaves, if you like.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vtqxtu1511784197.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=SQnr4Z-7rok',
                'ingredients' => '[119,120,104,26,121,28,122,123,98,124,47,60,61,99,125]',
                'measurements' => '[16,115,121,122,79,123,32,117,124,115,25,125,125,4,60]',
                'created_at' => '2025-04-15 09:39:14',
                'updated_at' => '2025-04-15 09:39:14',
            ),
            21 => 
            array (
                'id' => 22,
                'tmdb_id' => 52913,
                'name' => 'Brie wrapped in prosciutto & brioche',
                'category_id' => 7,
                'area_id' => 7,
                'instructions' => 'Mix the flour, 1 tsp salt, caster sugar, yeast, milk and eggs together in a mixer using the dough attachment for 5 mins until the dough is smooth. Add the butter and mix for a further 4 mins on medium speed. Scrape the dough bowl and mix again for 1 min. Place the dough in a container, cover with cling film and leave in the fridge for at least 6 hrs before using.
Wrap the Brie in the prosciutto and set aside. Turn out the dough onto a lightly floured surface. Roll into a 25cm circle. Place the wrapped Brie in the middle of the circle and fold the edges in neatly. Put the parcel onto a baking tray lined with baking parchment and brush with beaten egg. Chill in the fridge for 30 mins, then brush again with beaten egg and chill for a further 30 mins. Leave to rise for 1 hr at room temperature. Heat oven to 200C/180C fan/gas 6, then bake for 22 mins. Serve warm.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qqpwsy1511796276.jpg',
                'tags' => '[20,21,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FzNPPD8lbWg',
                'ingredients' => '[10,5,126,16,18,18,2,127,128]',
                'measurements' => '[126,113,127,116,62,112,128,79,64]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            22 => 
            array (
                'id' => 23,
                'tmdb_id' => 52914,
                'name' => 'Boulangère Potatoes',
                'category_id' => 7,
                'area_id' => 7,
            'instructions' => 'Heat oven to 200C/fan 180C/gas 6. Fry the onions and thyme sprigs in the oil until softened and lightly coloured (about 5 mins).
Spread a layer of potatoes over the base of a 1.5-litre oiled gratin dish. Sprinkle over a few onions (see picture, above) and continue layering, finishing with a layer of potatoes. Pour over the stock and bake for 50-60 mins until the potatoes are cooked and the top is golden and crisp.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qywups1511796761.jpg',
                'tags' => '[20]',
                'youtube_url' => 'https://www.youtube.com/watch?v=gcXPruv1Mjg',
                'ingredients' => '[70,60,47,66,87]',
                'measurements' => '[129,125,25,130,131]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            23 => 
            array (
                'id' => 24,
                'tmdb_id' => 52928,
                'name' => 'BeaverTails',
                'category_id' => 1,
                'area_id' => 8,
                'instructions' => 'In the bowl of a stand mixer, add warm water, a big pinch of sugar and yeast. Allow to sit until frothy.
Into the same bowl, add 1/2 cup sugar, warm milk, melted butter, eggs and salt, and whisk until combined.
Place a dough hook on the mixer, add the flour with the machine on, until a smooth but slightly sticky dough forms.
Place dough in a bowl, cover with plastic wrap, and allow to proof for 1 1/2 hours.
Cut dough into 12 pieces, and roll out into long oval-like shapes about 1/4 inch thick that resemble a beaver’s tail.
In a large, deep pot, heat oil to 350 degrees. Gently place beavertail dough into hot oil and cook for 30 to 45 seconds on each side until golden brown.
Drain on paper towels, and garnish as desired. Toss in cinnamon sugar, in white sugar with a squeeze of lemon, or with a generous slathering of Nutella and a handful of toasted almonds. Enjoy!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ryppsv1511815505.jpg',
                'tags' => '[21,4,22]',
                'youtube_url' => 'https://www.youtube.com/watch?v=2G07UOqU2e8',
                'ingredients' => '[36,126,23,16,2,18,21,19,17,109,23,14]',
                'measurements' => '[132,133,132,132,134,4,135,136,137,138,138,138]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            24 => 
            array (
                'id' => 25,
                'tmdb_id' => 52940,
                'name' => 'Brown Stew Chicken',
                'category_id' => 2,
                'area_id' => 9,
                'instructions' => 'Squeeze lime over chicken and rub well. Drain off excess lime juice.
Combine tomato, scallion, onion, garlic, pepper, thyme, pimento and soy sauce in a large bowl with the chicken pieces. Cover and marinate at least one hour.
Heat oil in a dutch pot or large saucepan. Shake off the seasonings as you remove each piece of chicken from the marinade. Reserve the marinade for sauce.
Lightly brown the chicken a few pieces at a time in very hot oil. Place browned chicken pieces on a plate to rest while you brown the remaining pieces.
Drain off excess oil and return the chicken to the pan. Pour the marinade over the chicken and add the carrots. Stir and cook over medium heat for 10 minutes.
Mix flour and coconut milk and add to stew, stirring constantly. Turn heat down to minimum and cook another 20 minutes or until tender.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sypxpx1515365095.jpg',
                'tags' => '[8]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_gFB1fkNhXs',
                'ingredients' => '[129,130,70,28,131,64,132,60,72,133,134,35,135]',
                'measurements' => '[139,140,101,101,140,140,32,37,5,25,37,61,117]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            25 => 
            array (
                'id' => 26,
                'tmdb_id' => 52952,
                'name' => 'Beef Lo Mein',
                'category_id' => 3,
                'area_id' => 10,
                'instructions' => 'STEP 1 - MARINATING THE BEEF
In a bowl, add the beef, salt, 1 pinch white pepper, 1 Teaspoon sesame seed oil, 1/2 egg, corn starch,1 Tablespoon of oil and mix together.
STEP 2 - BOILING THE THE NOODLES
In a 6 qt pot add your noodles to boiling water until the noodles are submerged and boil on high heat for 10 seconds. After your noodles is done boiling strain and cool with cold water.
STEP 3 - STIR FRY
Add 2 Tablespoons of oil, beef and cook on high heat untill beef is medium cooked.
Set the cooked beef aside
In a wok add 2 Tablespoon of oil, onions, minced garlic, minced ginger, bean sprouts, mushrooms, peapods and 1.5 cups of water or until the vegetables are submerged in water.
Add the noodles to wok
To make the sauce, add oyster sauce, 1 pinch white pepper, 1 teaspoon sesame seed oil, sugar, and 1 Teaspoon of soy sauce.
Next add the beef to wok and stir-fry',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529444830.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ZT9LSsNXXe0',
                'ingredients' => '[67,21,102,136,137,138,17,139,53,140,27,141,45,36,142,23,133]',
                'measurements' => '[141,95,95,37,142,20,143,144,132,5,5,27,27,27,117,5,5]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            26 => 
            array (
                'id' => 27,
                'tmdb_id' => 52959,
                'name' => 'Baked salmon with fennel & tomatoes',
                'category_id' => 8,
                'area_id' => 1,
                'instructions' => 'Heat oven to 180C/fan 160C/gas 4. Trim the fronds from the fennel and set aside. Cut the fennel bulbs in half, then cut each half into 3 wedges. Cook in boiling salted water for 10 mins, then drain well. Chop the fennel fronds roughly, then mix with the parsley and lemon zest.

Spread the drained fennel over a shallow ovenproof dish, then add the tomatoes. Drizzle with olive oil, then bake for 10 mins. Nestle the salmon among the veg, sprinkle with lemon juice, then bake 15 mins more until the fish is just cooked. Scatter over the parsley and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1548772327.jpg',
                'tags' => '[23,24,25,2,26]',
                'youtube_url' => 'https://www.youtube.com/watch?v=xvPR2Tfw5k0',
                'ingredients' => '[33,83,109,143,47,144,145]',
                'measurements' => '[94,145,146,100,117,122,12]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            27 => 
            array (
                'id' => 28,
                'tmdb_id' => 52961,
                'name' => 'Budino Di Ricotta',
                'category_id' => 1,
                'area_id' => 11,
                'instructions' => 'Mash the ricotta and beat well with the egg yolks, stir in the flour, sugar, cinnamon, grated lemon rind and the rum and mix well. You can do this in a food processor. Beat the egg whites until stiff, fold in and pour into a buttered and floured 25cm cake tin. Bake in the oven at 180ºC/160ºC fan/gas 4 for about 40 minutes, or until it is firm.

Serve hot or cold dusted with icing sugar.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1549542877.jpg',
                'tags' => '[19,2,14,15,5,11]',
                'youtube_url' => 'https://www.youtube.com/watch?v=6dzd6Ra6sb4',
                'ingredients' => '[146,18,19,23,14,147,148,118]',
                'measurements' => '[47,147,20,79,5,148,143,149]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            28 => 
            array (
                'id' => 29,
                'tmdb_id' => 52965,
                'name' => 'Breakfast Potatoes',
                'category_id' => 9,
                'area_id' => 8,
                'instructions' => 'Before you do anything, freeze your bacon slices that way when you\'re ready to prep, it\'ll be so much easier to chop!
Wash the potatoes and cut medium dice into square pieces. To prevent any browning, place the already cut potatoes in a bowl filled with water.
In the meantime, heat 1-2 tablespoons of oil in a large skillet over medium-high heat. Tilt the skillet so the oil spreads evenly.
Once the oil is hot, drain the potatoes and add to the skillet. Season with salt, pepper, and Old Bay as needed.
Cook for 10 minutes, stirring the potatoes often, until brown. If needed, add a tablespoon more of oil.
Chop up the bacon and add to the potatoes. The bacon will start to render and the fat will begin to further cook the potatoes. Toss it up a bit! The bacon will take 5-6 minutes to crisp.
Once the bacon is cooked, reduce the heat to medium-low, add the minced garlic and toss. Season once more. Add dried or fresh parsley. Control heat as needed.
Let the garlic cook until fragrant, about one minute.
Just before serving, drizzle over the maple syrup and toss. Let that cook another minute, giving the potatoes a caramelized effect.
Serve in a warm bowl with a sunny side up egg!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1550441882.jpg',
                'tags' => '[13,6]',
                'youtube_url' => 'https://www.youtube.com/watch?v=BoD0TIO9nE4',
                'ingredients' => '[66,47,104,28,149,83,21,102,72]',
                'measurements' => '[120,117,150,151,117,138,95,95,152]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            29 => 
            array (
                'id' => 30,
                'tmdb_id' => 52979,
            'name' => 'Bitterballen (Dutch meatballs)',
                'category_id' => 3,
                'area_id' => 12,
                'instructions' => 'Melt the butter in a skillet or pan. When melted, add the flour little by little and stir into a thick paste. Slowly stir in the stock, making sure the roux absorbs the liquid. Simmer for a couple of minutes on a low heat while you stir in the onion, parsley and the shredded meat. The mixture should thicken and turn into a heavy, thick sauce.

Pour the mixture into a shallow container, cover and refrigerate for several hours, or until the sauce has solidified.

Take a heaping tablespoon of the cold, thick sauce and quickly roll it into a small ball. Roll lightly through the flour, then the egg and finally the breadcrumbs. Make sure that the egg covers the whole surface of the bitterbal. When done, refrigerate the snacks while the oil in your fryer heats up to 190C (375F). Fry four bitterballen at a time, until golden.

Serve on a plate with a nice grainy or spicy mustard. 
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/lhqev81565090111.jpg',
                'tags' => '[27,28,5]',
                'youtube_url' => 'https://www.youtube.com/watch?v=q8AKfYUtDuM',
                'ingredients' => '[2,19,63,53,83,67,21,102,44,19,18,150]',
                'measurements' => '[121,81,153,10,117,42,95,95,95,113,49,113]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            30 => 
            array (
                'id' => 31,
                'tmdb_id' => 52995,
                'name' => 'BBQ Pork Sloppy Joes',
                'category_id' => 10,
                'area_id' => 4,
                'instructions' => '1

Preheat oven to 450 degrees. Wash and dry all produce. Cut sweet potatoes into ½-inch-thick wedges. Toss on a baking sheet with a drizzle of oil, salt, and pepper. Roast until browned and tender, 20-25 minutes.

2

Meanwhile, halve and peel onion. Slice as thinly as possible until you have ¼ cup (½ cup for 4 servings); finely chop remaining onion. Peel and finely chop garlic. Halve lime; squeeze juice into a small bowl. Halve buns. Add 1 TBSP butter (2 TBSP for 4) to a separate small microwave-safe bowl; microwave until melted, 30 seconds. Brush onto cut sides of buns.

3

To bowl with lime juice, add sliced onion, ¼ tsp sugar (½ tsp for 4 servings), and a pinch of salt. Stir to combine; set aside to quick-pickle.

4

Heat a drizzle of oil in a large pan over medium-high heat. Add chopped onion and season with salt and pepper. Cook, stirring, until softened, 4-5 minutes. Add garlic and cook until fragrant, 30 seconds more. Add pork and season with salt and pepper. Cook, breaking up meat into pieces, until browned and cooked through, 4-6 minutes.

5

While pork cooks, in a third small bowl, combine BBQ sauce, pickling liquid from onion, 3 TBSP ketchup (6 TBSP for 4 servings), ½ tsp sugar (1 tsp for 4), and ¼ cup water (⅓ cup for 4). Once pork is cooked through, add BBQ sauce mixture to pan. Cook, stirring, until sauce is thickened, 2-3 minutes. Taste and season with salt and pepper.

6

Meanwhile, toast buns in oven or toaster oven until golden, 3-5 minutes. Divide toasted buns between plates and fill with as much BBQ pork as you’d like. Top with pickled onion and hot sauce. Serve with sweet potato wedges on the side.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/atd5sh1583188467.jpg',
                'tags' => '[]',
                'youtube_url' => '',
                'ingredients' => '[66,151,55,132,41,152,153,154,79,23,135,21,102]',
                'measurements' => '[4,32,154,32,4,155]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            31 => 
            array (
                'id' => 32,
                'tmdb_id' => 52997,
                'name' => 'Beef Banh Mi Bowls with Sriracha Mayo, Carrot & Pickled Cucumber',
                'category_id' => 3,
                'area_id' => 13,
                'instructions' => 'Add\'l ingredients: mayonnaise, siracha

1

Place rice in a fine-mesh sieve and rinse until water runs clear. Add to a small pot with 1 cup water (2 cups for 4 servings) and a pinch of salt. Bring to a boil, then cover and reduce heat to low. Cook until rice is tender, 15 minutes. Keep covered off heat for at least 10 minutes or until ready to serve.

2

Meanwhile, wash and dry all produce. Peel and finely chop garlic. Zest and quarter lime (for 4 servings, zest 1 lime and quarter both). Trim and halve cucumber lengthwise; thinly slice crosswise into half-moons. Halve, peel, and medium dice onion. Trim, peel, and grate carrot.

3

In a medium bowl, combine cucumber, juice from half the lime, ¼ tsp sugar (½ tsp for 4 servings), and a pinch of salt. In a small bowl, combine mayonnaise, a pinch of garlic, a squeeze of lime juice, and as much sriracha as you’d like. Season with salt and pepper.

4

Heat a drizzle of oil in a large pan over medium-high heat. Add onion and cook, stirring, until softened, 4-5 minutes. Add beef, remaining garlic, and 2 tsp sugar (4 tsp for 4 servings). Cook, breaking up meat into pieces, until beef is browned and cooked through, 4-5 minutes. Stir in soy sauce. Turn off heat; taste and season with salt and pepper.

5

Fluff rice with a fork; stir in lime zest and 1 TBSP butter. Divide rice between bowls. Arrange beef, grated carrot, and pickled cucumber on top. Top with a squeeze of lime juice. Drizzle with sriracha mayo.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/z0ageb1583189517.jpg',
                'tags' => '[]',
                'youtube_url' => '',
                'ingredients' => '[155,53,132,28,156,64,157,133]',
                'measurements' => '[156,32,32,57,32,157,155,158]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            32 => 
            array (
                'id' => 33,
                'tmdb_id' => 53013,
                'name' => 'Big Mac',
                'category_id' => 3,
                'area_id' => 4,
                'instructions' => 'For the Big Mac sauce, combine all the ingredients in a bowl, season with salt and chill until ready to use.
2. To make the patties, season the mince with salt and pepper and form into 4 balls using about 1/3 cup mince each. Place each onto a square of baking paper and flatten to form into four x 15cm circles. Heat oil in a large frypan over high heat. In 2 batches, cook beef patties for 1-2 minutes each side until lightly charred and cooked through. Remove from heat and keep warm. Repeat with remaining two patties.
3. Carefully slice each burger bun into three acrossways, then lightly toast.
4. To assemble the burgers, spread a little Big Mac sauce over the bottom base. Top with some chopped onion, shredded lettuce, slice of cheese, beef patty and some pickle slices. Top with the middle bun layer, and spread with more Big Mac sauce, onion, lettuce, pickles, beef patty and then finish with more sauce. Top with burger lid to serve.
5. After waiting half an hour for your food to settle, go for a jog.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/urzj1d1587670726.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=C5J39YnnPsg',
                'ingredients' => '[158,47,159,53,160,161,162,163,164,102,65,165,166,167]',
                'measurements' => '[42,25,4,159,160,123,161,27,37,95,37,162,162,17]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            33 => 
            array (
                'id' => 34,
                'tmdb_id' => 53018,
            'name' => 'Bigos (Hunters Stew)',
                'category_id' => 10,
                'area_id' => 14,
            'instructions' => 'Preheat the oven to 350 degrees F (175 degrees C).

Heat a large pot over medium heat. Add the bacon and kielbasa; cook and stir until the bacon has rendered its fat and sausage is lightly browned. Use a slotted spoon to remove the meat and transfer to a large casserole or Dutch oven.

Coat the cubes of pork lightly with flour and fry them in the bacon drippings over medium-high heat until golden brown. Use a slotted spoon to transfer the pork to the casserole. Add the garlic, onion, carrots, fresh mushrooms, cabbage and sauerkraut. Reduce heat to medium; cook and stir until the carrots are soft, about 10 minutes. Do not let the vegetables brown.

Deglaze the pan by pouring in the red wine and stirring to loosen all of the bits of food and flour that are stuck to the bottom. Season with the bay leaf, basil, marjoram, paprika, salt, pepper, caraway seeds and cayenne pepper; cook for 1 minute.

Mix in the dried mushrooms, hot pepper sauce, Worcestershire sauce, beef stock, tomato paste and tomatoes. Heat through just until boiling. Pour the vegetables and all of the liquid into the casserole dish with the meat. Cover with a lid.

Bake in the preheated oven for 2 1/2 to 3 hours, until meat is very tender.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/md8w601593348504.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Oqg_cO4s8ik',
                'ingredients' => '[104,168,152,19,55,53,45,169,170,98,99,171,172,167,173,154,63,123,174,175]',
                'measurements' => '[123,155,155,163,164,165,166,167,92,163,32,5,5,117,168,169,170,25,27,169]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            34 => 
            array (
                'id' => 35,
                'tmdb_id' => 53036,
                'name' => 'Boxty Breakfast',
                'category_id' => 10,
                'area_id' => 15,
                'instructions' => 'STEP 1
Before you start, put your oven on its lowest setting, ready to keep things warm. Peel the potatoes, grate 2 of them, then set aside. Cut the other 2 into large chunks, then boil for 10-15 mins or until tender. Meanwhile, squeeze as much of the liquid from the grated potatoes as you can using a clean tea towel. Mash the boiled potatoes, then mix with the grated potato, spring onions and flour.

STEP 2
Whisk the egg white in a large bowl until it holds soft peaks. Fold in the buttermilk, then add the bicarbonate of soda. Fold into the potato mix.

STEP 3
Heat a large non-stick frying pan over a medium heat, then add 1 tbsp butter and some of the oil. Drop 3-4 spoonfuls of the potato mixture into the pan, then gently cook for 3-5 mins on each side until golden and crusty. Keep warm on a plate in the oven while you cook the next batch, adding more butter and oil to the pan before you do so. You will get 16 crumpet-size boxty from the mix. Can be made the day ahead, drained on kitchen paper, then reheated in a low oven for 20 mins.

STEP 4
Heat the grill to medium and put the tomatoes in a heavy-based pan. Add a good knob of butter and a little oil, then fry for about 5 mins until softened. Grill the bacon, then pile onto a plate and keep warm. Stack up the boxty, bacon and egg, and serve the tomatoes on the side.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/naqyel1608588563.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=80W0mCFDIP0',
                'ingredients' => '[66,176,10,177,16,178,2,135,143,104,137]',
                'measurements' => '[147,171,121,32,103,5,20,25,21,172,21]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            35 => 
            array (
                'id' => 36,
                'tmdb_id' => 53053,
                'name' => 'Beef Rendang',
                'category_id' => 3,
                'area_id' => 2,
                'instructions' => 'Chop the spice paste ingredients and then blend it in a food processor until fine.
Heat the oil in a stew pot, add the spice paste, cinnamon, cloves, star anise, and cardamom and stir-fry until aromatic. Add the beef and the pounded lemongrass and stir for 1 minute. Add the coconut milk, tamarind juice, water, and simmer on medium heat, stirring frequently until the meat is almost cooked. Add the kaffir lime leaves, kerisik (toasted coconut), sugar or palm sugar, stirring to blend well with the meat.
Lower the heat to low, cover the lid, and simmer for 1 to 1 1/2 hours or until the meat is really tender and the gravy has dried up. Add more salt and sugar to taste. Serve immediately with steamed rice and save some for overnight.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/bc8v651619789840.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Ot-dmfBaZrA',
                'ingredients' => '[67,135,74,73,179,125,180,36,34,132,23,26]',
                'measurements' => '[173,143,32,57,57,57,27,27,25,21,117,174]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            36 => 
            array (
                'id' => 37,
                'tmdb_id' => 53060,
                'name' => 'Burek',
                'category_id' => 7,
                'area_id' => 16,
                'instructions' => 'Fry the finely chopped onions and minced meat in oil. Add the salt and pepper. Grease a round baking tray and put a layer of pastry in it. Cover with a thin layer of filling and cover this with another layer of filo pastry which must be well coated in oil. Put another layer of filling and cover with pastry. When you have five or six layers, cover with filo pastry, bake at 200ºC/392ºF for half an hour and cut in quarters and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tkxquw1628771028.jpg',
                'tags' => '[29,30]',
                'youtube_url' => 'https://www.youtube.com/watch?v=YsJXZwE5pdY',
                'ingredients' => '[181,158,53,17,21,102]',
                'measurements' => '[66,81,81,175,44,44]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            37 => 
            array (
                'id' => 38,
                'tmdb_id' => 53068,
                'name' => 'Beef Mechado',
                'category_id' => 3,
                'area_id' => 17,
                'instructions' => '0.	Make the beef tenderloin marinade by combining soy sauce, vinegar, ginger, garlic, sesame oil, olive oil, sugar, salt, and ground black pepper in a large bowl. Mix well.
1.	Add the cubed beef tenderloin to the bowl with the beef tenderloin marinade. Gently toss to coat the beef. Let it stay for 1 hour.
2.	Using a metal or bamboo skewer, assemble the beef kebob by skewering the vegetables and marinated beef tenderloin.
3.	Heat-up the grill and start grilling the beef kebobs for 3 minutes per side. This will give you a medium beef that is juicy and tender on the inside. Add more time if you want your beef well done, but it will be less tender.
4.	Transfer to a serving plate. Serve with Saffron rice.
5.	Share and enjoy!
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/cgl60b1683206581.jpg',
                'tags' => '[8,31]',
                'youtube_url' => 'https://www.youtube.com/watch?v=jxW3Lj8VjyE',
                'ingredients' => '[55,53,67,123,36,47,109,66,133,182,62,21]',
                'measurements' => '[176,86,177,178,27,20,179,50,163,17,4,152]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            38 => 
            array (
                'id' => 39,
                'tmdb_id' => 53069,
                'name' => 'Bistek',
                'category_id' => 3,
                'area_id' => 17,
            'instructions' => '0.	Marinate beef in soy sauce, lemon (or calamansi), and ground black pepper for at least 1 hour. Note: marinate overnight for best result
1.	Heat the cooking oil in a pan then pan-fry half of the onions until the texture becomes soft. Set aside
2.	Drain the marinade from the beef. Set it aside. Pan-fry the beef on the same pan where the onions were fried for 1 minute per side. Remove from the pan. Set aside
3.	Add more oil if needed. Saute garlic and remaining raw onions until onion softens.
4.	Pour the remaining marinade and water. Bring to a boil.
5.	Add beef. Cover the pan and simmer until the meat is tender. Note: Add water as needed.
6.	Season with ground black pepper and salt as needed. Top with pan-fried onions.
7.	Transfer to a serving plate. Serve hot. Share and Enjoy!
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/4pqimk1683207418.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=xOQON5_S7as',
                'ingredients' => '[67,133,109,55,53,47,36,21]',
                'measurements' => '[155,180,32,176,181,182,27,183]',
                'created_at' => '2025-04-15 09:39:15',
                'updated_at' => '2025-04-15 09:39:15',
            ),
            39 => 
            array (
                'id' => 40,
                'tmdb_id' => 53070,
                'name' => 'Beef Caldereta',
                'category_id' => 3,
                'area_id' => 17,
                'instructions' => '0.	Heat oil in a cooking pot. Saute onion and garlic until onion softens
1.	Add beef. Saute until the outer part turns light brown.
2.	Add soy sauce. Pour tomato sauce and water. Let boil.
3.	Add Knorr Beef Cube. Cover the pressure cooker. Cook for 30 minutes.
4.	Pan-fry carrot and potato until it browns. Set aside.
5.	Add chili pepper, liver spread and peanut butter. Stir.
6.	Add bell peppers, fried potato and carrot. Cover the pot. Continue cooking for 5 to 7 minutes.
7.	Season with salt and ground black pepper. Serve.
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/41cxjh1683207682.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=yI7hTz0ft5k',
                'ingredients' => '[67,63,133,36,183,131,66,64,123,24,184,53,55,47]',
                'measurements' => '[184,32,117,61,86,86,86,86,178,185,174,140,58,20]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            40 => 
            array (
                'id' => 41,
                'tmdb_id' => 53071,
                'name' => 'Beef Asado',
                'category_id' => 3,
                'area_id' => 17,
                'instructions' => '0.	Combine beef, crushed peppercorn, soy sauce, vinegar, dried bay leaves, lemon, and tomato sauce. Mix well. Marinate beef for at least 30 minutes.
1.	Put the marinated beef in a cooking pot along with remaining marinade. Add water. Let boil.
2.	Add Knorr Beef Cube. Stir. Cover the pot and cook for 40 minutes in low heat.
3.	Turn the beef over. Add tomato paste. Continue cooking until beef tenderizes. Set aside.
4.	Heat oil in a pan. Fry the potato until it browns. Turn over and continue frying the opposite side. Remove from the pan and place on a clean plate. Do the same with the carrots.
5.	Save 3 tablespoons of cooking oil from the pan where the potato was fried. Saute onion and garlic until onion softens.
6.	Pour-in the sauce from the beef stew. Let boil. Add the beef. Cook for 2 minutes.
7.	Add butter and let it melt. Continue cooking until the sauce reduces to half.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/pkopc31683207947.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=lNlK8DVhXXA',
                'ingredients' => '[67,185,123,36,133,164,102,99,109,90,2,47,53,55]',
                'measurements' => '[130,32,178,186,187,117,25,60,142,25,20,132,140,70]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            41 => 
            array (
                'id' => 42,
                'tmdb_id' => 53076,
                'name' => 'Bread omelette',
                'category_id' => 9,
                'area_id' => 3,
                'instructions' => 'Make and enjoy',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/hqaejl1695738653.jpg',
                'tags' => '[]',
                'youtube_url' => '',
                'ingredients' => '[41,137,21]',
                'measurements' => '[4,4,188]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            42 => 
            array (
                'id' => 43,
                'tmdb_id' => 53078,
            'name' => 'Beetroot Soup (Borscht)',
                'category_id' => 4,
                'area_id' => 18,
                'instructions' => 'Chop the beetroot, add water and stock cube and cook for 15mins. Add the other ingredients and boil until soft. Finally add the beans and cook for 5mins. Serve in the soup pot.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/zadvgb1699012544.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=6CXgPVw_-0g',
                'ingredients' => '[186,47,187,36,66,188,189]',
                'measurements' => '[57,182,32,189,57,26,138]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            43 => 
            array (
                'id' => 44,
                'tmdb_id' => 53080,
                'name' => 'Blini Pancakes',
                'category_id' => 7,
                'area_id' => 6,
                'instructions' => 'In a large bowl, whisk together 1/2 cup buckwheat flour, 2/3 cup all-purpose flour, 1/2 teaspoon salt, and 1 teaspoon yeast.

Make a well in the center and pour in 1 cup warm milk, whisking until the batter is smooth.

Cover the bowl and let the batter rise until doubled, about 1 hour.

Enrich and Rest the Batter
Stir 2 tablespoons melted butter and 1 egg yolk into the batter.

In a separate bowl, whisk 1 egg white until stiff, but not dry.

Fold the whisked egg white into the batter.

Cover the bowl and let the batter stand 20 minutes.

Pan-Fry the Blini
Heat butter in a large nonstick skillet over medium heat.

Drop quarter-sized dollops of batter into the pan, being careful not to overcrowd the pan. Cook for about 1 minute or until bubbles form.

Turn and cook for about 30 additional seconds.

Remove the finished blini onto a plate and cover them with a clean kitchen towel to keep warm. Add more butter to the pan and repeat the frying process with the remaining batter.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/0206h11699013358.jpg',
                'tags' => '[33]',
                'youtube_url' => 'https://www.youtube.com/watch?v=GsB8ZI5vREA',
                'ingredients' => '[190,19,21,126,16,2,137]',
                'measurements' => '[132,190,17,5,27,25,191]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            44 => 
            array (
                'id' => 45,
                'tmdb_id' => 52765,
                'name' => 'Chicken Enchilada Casserole',
                'category_id' => 2,
                'area_id' => 5,
                'instructions' => 'Cut each chicken breast in about 3 pieces, so that it cooks faster and put it in a small pot. Pour Enchilada sauce over it and cook covered on low to medium heat until chicken is cooked through, about 20 minutes. No water is needed, the chicken will cook in the Enchilada sauce. Make sure you stir occasionally so that it doesn\'t stick to the bottom.
Remove chicken from the pot and shred with two forks.
Preheat oven to 375 F degrees.
Start layering the casserole. Start with about ¼ cup of the leftover Enchilada sauce over the bottom of a baking dish. I used a longer baking dish, so that I can put 2 corn tortillas across. Place 2 tortillas on the bottom, top with ⅓ of the chicken and ⅓ of the remaining sauce. Sprinkle with ⅓ of the cheese and repeat starting with 2 more tortillas, then chicken, sauce, cheese. Repeat with last layer with the remaining ingredients, tortillas, chicken, sauce and cheese.
Bake for 20 to 30 minutes uncovered, until bubbly and cheese has melted and started to brown on top.
Serve warm.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qtuwxu1468233098.jpg',
                'tags' => '[34,35,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=EtVkwVKLc_M',
                'ingredients' => '[191,192,193,194]',
                'measurements' => '[192,186,21,4]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            45 => 
            array (
                'id' => 46,
                'tmdb_id' => 52776,
                'name' => 'Chocolate Gateau',
                'category_id' => 1,
                'area_id' => 7,
                'instructions' => 'Preheat the oven to 180°C/350°F/Gas Mark 4. Grease and line the base of an 8 in round spring form cake tin with baking parchment
Break the chocolate into a heatproof bowl and place over a saucepan of gently simmering water and stir until it melts. (or melt in the microwave for 2-3 mins stirring occasionally)
Place the butter and sugar in a mixing bowl and cream together with a wooden spoon until light and fluffy. Gradually beat in the eggs, adding a little flour if the mixture begins to curdle. Fold in the remaining flour with the cooled, melted chocolate and milk. Mix until smooth.
Spread the mixture into the cake tin and bake for 50-55 mins or until firm in the centre and a skewer comes out cleanly. Cool for 10 minutes, then turn out and cool completely.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tqtywx1468317395.jpg',
                'tags' => '[19,36,14,4]',
                'youtube_url' => 'https://www.youtube.com/watch?v=dsJtgmAhFF4',
                'ingredients' => '[195,2,16,18,196,19]',
                'measurements' => '[79,100,193,174,100,97]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            46 => 
            array (
                'id' => 47,
                'tmdb_id' => 52779,
                'name' => 'Cream Cheese Tart',
                'category_id' => 5,
                'area_id' => 4,
            'instructions' => 'Crust: make a dough from 250g flour (I like mixing different flours like plain and wholegrain spelt flour), 125g butter, 1 egg and a pinch of salt, press it into a tart form and place it in the fridge. Filling: stir 300g cream cheese and 100ml milk until smooth, add in 3 eggs, 100g grated parmesan cheese and season with salt, pepper and nutmeg. Take the crust out of the fridge and prick the bottom with a fork. Pour in the filling and bake at 175 degrees C for about 25 minutes. Cover the tart with some aluminium foil after half the time. In the mean time, slice about 350g mini tomatoes. In a small pan heat 3tbsp olive oil, 3tbsp white vinegar, 1 tbsp honey, salt and pepper and combine well. Pour over the tomato slices and mix well. With a spoon, place the tomato slices on the tart, avoiding too much liquid on it. Decorate with basil leaves and enjoy',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wurrux1468416624.jpg',
                'tags' => '[1,37]',
                'youtube_url' => 'https://www.youtube.com/watch?v=UhQPwO4uymo',
                'ingredients' => '[19,2,137,21,161,16,18,197,78,198,199,171]',
                'measurements' => '[79,97,32,95,9,194,57,121,122,195,30,83]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            47 => 
            array (
                'id' => 48,
                'tmdb_id' => 52788,
                'name' => 'Christmas Pudding Flapjack',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Preheat the oven to 180°C/fan 160°C/gas mark 4 and grease and line a 25cm x 20cm tin. Melt the butter, sugar, syrup and orange zest in a large saucepan over a medium heat. The aim is to dissolve all the ingredients so that they are smooth, but to not lose any volume through boiling so be careful not to overheat.

Add the oats and stir well until evenly coated. Stir through the leftover Christmas pudding and tip into the prepared tin. Use a spoon to flatten the top and bake for 40 minutes until the edges start to brown. Whilst still warm in the tin, score into 12 squares. Allow to cool completely before cutting along the scores.

Keeps for 5 days in an air tight tin or freeze for up to 1 month.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vvusxs1483907034.jpg',
                'tags' => '[38,19]',
                'youtube_url' => 'https://www.youtube.com/watch?v=OaqvGvEiwzU',
                'ingredients' => '[4,200,201,202,203,204]',
                'measurements' => '[79,196,81,197,47,79]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            48 => 
            array (
                'id' => 49,
                'tmdb_id' => 52795,
                'name' => 'Chicken Handi',
                'category_id' => 2,
                'area_id' => 3,
                'instructions' => 'Take a large pot or wok, big enough to cook all the chicken, and heat the oil in it. Once the oil is hot, add sliced onion and fry them until deep golden brown. Then take them out on a plate and set aside.
To the same pot, add the chopped garlic and sauté for a minute. Then add the chopped tomatoes and cook until tomatoes turn soft. This would take about 5 minutes.
Then return the fried onion to the pot and stir. Add ginger paste and sauté well.
Now add the cumin seeds, half of the coriander seeds and chopped green chillies. Give them a quick stir.
Next goes in the spices – turmeric powder and red chilli powder. Sauté the spices well for couple of minutes.
Add the chicken pieces to the wok, season it with salt to taste and cook the chicken covered on medium-low heat until the chicken is almost cooked through. This would take about 15 minutes. Slowly sautéing the chicken will enhance the flavor, so do not expedite this step by putting it on high heat.
When the oil separates from the spices, add the beaten yogurt keeping the heat on lowest so that the yogurt doesn’t split. Sprinkle the remaining coriander seeds and add half of the dried fenugreek leaves. Mix well.
Finally add the cream and give a final mix to combine everything well.
Sprinkle the remaining kasuri methi and garam masala and serve the chicken handi hot with naan or rotis. Enjoy!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wyxwsp1486979827.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=IO0issT0Rmc',
                'ingredients' => '[129,53,54,55,205,135,206,207,208,184,56,111,209,210,211,21]',
                'measurements' => '[198,199,129,200,30,201,37,16,5,5,4,27,202,203,5,152]',
                'created_at' => '2025-04-15 09:39:16',
                'updated_at' => '2025-04-15 09:39:16',
            ),
            49 => 
            array (
                'id' => 50,
                'tmdb_id' => 52796,
                'name' => 'Chicken Alfredo Primavera',
                'category_id' => 2,
                'area_id' => 11,
            'instructions' => 'Heat 1 tablespoon of butter and 2 tablespoons of olive oil in a large skillet over medium-high heat. Season both sides of each chicken breast with seasoned salt and a pinch of pepper. Add the chicken to the skillet and cook for 5-7 minutes on each side, or until cooked through.  While the chicken is cooking, bring a large pot of water to a boil. Season the boiling water with a few generous pinches of kosher salt. Add the pasta and give it a stir. Cook, stirring occasionally, until al dente, about 12 minutes. Reserve 1/2 cup of  pasta water before draining the pasta.  Remove the chicken from the pan and transfer it to a cutting board; allow it to rest. Turn the heat down to medium and dd the remaining 1 tablespoon of butter and olive oil to the same pan you used to cook the chicken. Add the veggies (minus the garlic) and red pepper flakes to the pan and stir to coat with the oil and butter (refrain from seasoning with salt until the veggies are finished browning). Cook, stirring often, until the veggies are tender, about 5 minutes. Add the garlic and a generous pinch of salt and pepper to the pan and cook for 1 minute.  Deglaze the pan with the white wine. Continue to cook until the wine has reduced by half, about 3 minutes. Stir in the milk, heavy cream, and reserved pasta water. Bring the mixture to a gentle boil and allow to simmer and reduce for 2-3 minutes. Turn off the heat and add the Parmesan cheese and cooked pasta. Season with salt and pepper to taste. Garnish with Parmesan cheese and chopped parsley, if desired. ',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/syqypv1486981727.jpg',
                'tags' => '[39,7,18]',
                'youtube_url' => 'https://www.youtube.com/watch?v=qCIbq8HywpQ',
                'ingredients' => '[2,47,129,21,212,68,45,102,53,55,213,214,16,215,197,216,21,102,83]',
                'measurements' => '[193,204,205,206,207,90,208,209,140,176,210,132,132,132,211,212,95,95,159]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            50 => 
            array (
                'id' => 51,
                'tmdb_id' => 52818,
                'name' => 'Chicken Fajita Mac and Cheese',
                'category_id' => 2,
                'area_id' => 4,
                'instructions' => 'Fry your onion, peppers and garlic in olive oil until nicely translucent. Make a well in your veg and add your chicken. Add your seasoning and salt. Allow to colour slightly.
Add your cream, stock and macaroni.
Cook on low for 20 minutes. Add your cheeses, stir to combine.
Top with roasted peppers and parsley.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qrqywr1503066605.jpg',
                'tags' => '[39,35,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=bwTSmLTZKNg',
                'ingredients' => '[217,218,215,219,21,220,47,53,131,55,221,83]',
                'measurements' => '[47,61,132,66,5,213,75,214,215,99,27,216]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            51 => 
            array (
                'id' => 52,
                'tmdb_id' => 52819,
                'name' => 'Cajun spiced fish tacos',
                'category_id' => 8,
                'area_id' => 5,
                'instructions' => 'Cooking in a cajun spice and cayenne pepper marinade makes this fish super succulent and flavoursome. Top with a zesty dressing and serve in a tortilla for a quick, fuss-free main that\'s delightfully summery.

On a large plate, mix the cajun spice and cayenne pepper with a little seasoning and use to coat the fish all over.

Heat a little oil in a frying pan, add in the fish and cook over a medium heat until golden. Reduce the heat and continue frying until the fish is cooked through, about 10 minutes. Cook in batches if you don’t have enough room in the pan.

Meanwhile, prepare the dressing by combining all the ingredients with a little seasoning.
Soften the tortillas by heating in the microwave for 5-10 seconds. Pile high with the avocado, lettuce and spring onion, add a spoonful of salsa, top with large flakes of fish and drizzle over the dressing.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uvuyxu1503067369.jpg',
                'tags' => '[9,40]',
                'youtube_url' => 'https://www.youtube.com/watch?v=N4EdUt0Ou48',
                'ingredients' => '[222,29,223,135,224,225,226,176,227,228,109,55]',
                'measurements' => '[75,5,217,5,24,86,218,219,220,221,32,222]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            52 => 
            array (
                'id' => 53,
                'tmdb_id' => 52830,
                'name' => 'Crock Pot Chicken Baked Tacos',
                'category_id' => 2,
                'area_id' => 5,
                'instructions' => 'Put the uncooked chicken breasts in the crock pot. Pour the full bottle of salad dressing over the chicken. Sprinkle the rest of the ingredients over the top and mix them in a bit with a spoon.
Cover your crock pot with the lid and cook on high for 4 hours.
Remove all the chicken breasts from the crock pot and let cool.
Shred the chicken breasts and move to a glass bowl.
Pour most of the liquid over the shredded chicken.
FOR THE TACOS:
Make the guacamole sauce by mixing the avocado and green salsa together. Pour the guacamole mixture through a strainer until smooth and transfer to a squeeze bottle. Cut the tip off the lid of the squeeze bottle to make the opening more wide if needed.
Make the sour cream sauce by mixing the sour cream and milk together until you get a more liquid sour cream sauce. Transfer to a squeeze bottle.
In a 9x 13 glass baking dish, fill all 12+ tacos with a layer of refried beans, cooked chicken and shredded cheese.
Bake at 450 for 10-15 minutes just until the cheese is melted and bubbling.
Out of the oven top all the tacos with the sliced grape tomaotes, jalapeno and cilantro.
Finish with a drizzle of guacamole and sour cream.
Enjoy!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ypxvwv1505333929.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=oqL0mLDBzS4',
                'ingredients' => '[194,229,31,230,55,231,232,233,234,235,225,236,228,16]',
                'measurements' => '[223,224,225,226,206,26,172,61,227,228,229,193,204,226]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            53 => 
            array (
                'id' => 54,
                'tmdb_id' => 52831,
                'name' => 'Chicken Karaage',
                'category_id' => 2,
                'area_id' => 19,
                'instructions' => 'Add the ginger, garlic, soy sauce, sake and sugar to a bowl and whisk to combine. Add the chicken, then stir to coat evenly. Cover and refrigerate for at least 1 hour.

Add 1 inch of vegetable oil to a heavy bottomed pot and heat until the oil reaches 360 degrees F. Line a wire rack with 2 sheets of paper towels and get your tongs out. Put the potato starch in a bowl

Add a handful of chicken to the potato starch and toss to coat each piece evenly.

Fry the karaage in batches until the exterior is a medium brown and the chicken is cooked through. Transfer the fried chicken to the paper towel lined rack. If you want the karaage to stay crispy longer, you can fry the chicken a second time, until it\'s a darker color after it\'s cooled off once. Serve with lemon wedges.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tyywsw1505930373.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=XivddFddthc',
                'ingredients' => '[129,27,55,133,237,196,238,135,109]',
                'measurements' => '[230,226,78,193,226,231,232,232,232]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            54 => 
            array (
                'id' => 55,
                'tmdb_id' => 52832,
                'name' => 'Coq au vin',
                'category_id' => 2,
                'area_id' => 7,
                'instructions' => 'Heat 1 tbsp of the oil in a large, heavy-based saucepan or flameproof dish. Tip in the bacon and fry until crisp. Remove and drain on kitchen paper. Add the shallots to the pan and fry, stirring or shaking the pan often, for 5-8 mins until well browned all over. Remove and set aside with the bacon.
Pat the chicken pieces dry with kitchen paper. Pour the remaining oil into the pan, then fry half the chicken pieces, turning regularly, for 5-8 mins until well browned. Remove, then repeat with the remaining chicken. Remove and set aside.
Scatter in the garlic and fry briefly, then, with the heat medium-high, pour in the brandy or Cognac, stirring the bottom of the pan to deglaze. The alcohol should sizzle and start to evaporate so there is not much left.
Return the chicken legs and thighs to the pan along with any juices, then pour in a little of the wine, stirring the bottom of the pan again. Stir in the rest of the wine, the stock and tomato purée, drop in the bouquet garni, season with pepper and a pinch of salt, then return the bacon and shallots to the pan. Cover, lower the heat to a gentle simmer, add the chicken breasts and cook for 50 mins-1hr.
Just before ready to serve, heat the oil for the mushrooms in a large non-stick frying pan. Add the mushrooms and fry over a high heat for a few mins until golden. Remove and keep warm.
Lift the chicken, shallots and bacon from the pan and transfer to a warmed serving dish. Remove the bouquet garni. To make the thickener, mix the flour, olive oil and butter in a small bowl using the back of a teaspoon. Bring the wine mixture to a gentle boil, then gradually drop in small pieces of the thickener, whisking each piece in using a wire whisk. Simmer for 1-2 mins. Scatter the mushrooms over the chicken, then pour over the wine sauce. Garnish with chopped parsley.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qstyvs1505931190.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_ise46LADBs',
                'ingredients' => '[47,104,103,239,25,194,55,240,98,218,123,60,61,62,83,121,10,2]',
                'measurements' => '[233,234,235,236,237,238,239,73,240,103,37,108,241,4,138,79,75,5]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            55 => 
            array (
                'id' => 56,
                'tmdb_id' => 52839,
                'name' => 'Chilli prawn linguine',
                'category_id' => 11,
                'area_id' => 11,
                'instructions' => 'Mix the dressing ingredients in a small bowl and season with salt and pepper. Set aside.

Cook the pasta according to the packet instructions. Add the sugar snap peas for the last minute or so of cooking time.

Meanwhile, heat the oil in a wok or large frying pan, toss in the garlic and chilli and cook over a fairly gentle heat for about 30 seconds without letting the garlic brown. Tip in the prawns and cook over a high heat, stirring frequently, for about 3 minutes until they turn pink.

Add the tomatoes and cook, stirring occasionally, for 3 minutes until they just start to soften. Drain the pasta and sugar snaps well, then toss into the prawn mixture. Tear in the basil leaves, stir, and season with salt and pepper.

Serve with salad leaves drizzled with the lime dressing, and warm crusty bread.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/usywpp1511189717.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=SC17Mc70Db0',
                'ingredients' => '[241,242,47,28,243,244,143,245,246,41,247,132,5]',
                'measurements' => '[242,102,84,243,50,244,172,245,246,12,75,148,37]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            56 => 
            array (
                'id' => 57,
                'tmdb_id' => 52840,
                'name' => 'Clam chowder',
                'category_id' => 5,
                'area_id' => 4,
                'instructions' => 'Rinse the clams in several changes of cold water and drain well. Tip the clams into a large pan with 500ml of water. Cover, bring to the boil and simmer for 2 mins until the clams have just opened. Tip the contents of the pan into a colander over a bowl to catch the clam stock. When cool enough to handle, remove the clams from their shells – reserving a handful of empty shells for presentation if you want. Strain the clam stock into a jug, leaving any grit in the bottom of the bowl. You should have around 800ml stock.
Heat the butter in the same pan and sizzle the bacon for 3-4 mins until it starts to brown. Stir in the onion, thyme and bay and cook everything gently for 10 mins until the onion is soft and golden. Scatter over the flour and stir in to make a sandy paste, cook for 2 mins more, then gradually stir in the clam stock then the milk and the cream.
Throw in the potatoes, bring everything to a simmer and leave to bubble away gently for 10 mins or until the potatoes are cooked. Use a fork to crush a few of the potato chunks against the side of the pan to help thicken – you still want lots of defined chunks though. Stir through the clam meat and the few clam shells, if you\'ve gone down that route, and simmer for a minute to reheat. Season with plenty of black pepper and a little salt, if needed, then stir through the parsley just before ladling into bowls or hollowed-out crusty rolls.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rvtvuw1511190488.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=fEN_fm6kX6k',
                'ingredients' => '[248,2,104,53,60,99,10,16,43,66,83]',
                'measurements' => '[247,113,81,85,125,32,77,103,103,94,159]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            57 => 
            array (
                'id' => 58,
                'tmdb_id' => 52841,
                'name' => 'Creamy Tomato Soup',
                'category_id' => 5,
                'area_id' => 1,
                'instructions' => 'Put the oil, onions, celery, carrots, potatoes and bay leaves in a big casserole dish, or two saucepans. Fry gently until the onions are softened – about 10-15 mins. Fill the kettle and boil it.
Stir in the tomato purée, sugar, vinegar, chopped tomatoes and passata, then crumble in the stock cubes. Add 1 litre boiling water and bring to a simmer. Cover and simmer for 15 mins until the potato is tender, then remove the bay leaves. Purée with a stick blender (or ladle into a blender in batches) until very smooth. Season to taste and add a pinch more sugar if it needs it. The soup can now be cooled and chilled for up to 2 days, or frozen for up to 3 months.
To serve, reheat the soup, stirring in the milk – try not to let it boil. Serve in small bowls with cheesy sausage rolls.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/stpuws1511191310.jpg',
                'tags' => '[2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=lBhwjjUiFk4',
                'ingredients' => '[47,70,85,64,66,99,123,23,198,249,250,251,252]',
                'measurements' => '[73,101,248,9,47,60,249,84,84,247,47,57,106]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            58 => 
            array (
                'id' => 59,
                'tmdb_id' => 52846,
                'name' => 'Chicken & mushroom Hotpot',
                'category_id' => 2,
                'area_id' => 1,
                'instructions' => 'Heat oven to 200C/180C fan/gas 6. Put the butter in a medium-size saucepan and place over a medium heat. Add the onion and leave to cook for 5 mins, stirring occasionally. Add the mushrooms to the saucepan with the onions.

Once the onion and mushrooms are almost cooked, stir in the flour – this will make a thick paste called a roux. If you are using a stock cube, crumble the cube into the roux now and stir well. Put the roux over a low heat and stir continuously for 2 mins – this will cook the flour and stop the sauce from having a floury taste.

Take the roux off the heat. Slowly add the fresh stock, if using, or pour in 500ml water if you’ve used a stock cube, stirring all the time. Once all the liquid has been added, season with pepper, a pinch of nutmeg and mustard powder. Put the saucepan back onto a medium heat and slowly bring it to the boil, stirring all the time. Once the sauce has thickened, place on a very low heat. Add the cooked chicken and vegetables to the sauce and stir well. Grease a medium-size ovenproof pie dish with a little butter and pour in the chicken and mushroom filling.

Carefully lay the potatoes on top of the hot-pot filling, overlapping them slightly, almost like a pie top.

Brush the potatoes with a little melted butter and cook in the oven for about 35 mins. The hot-pot is ready once the potatoes are cooked and golden brown.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uuuspp1511297945.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=bXKWu4GojNI',
                'ingredients' => '[2,53,45,10,187,44,253,129,254,66,2]',
                'measurements' => '[113,140,121,175,32,95,95,79,250,161,88]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            59 => 
            array (
                'id' => 60,
                'tmdb_id' => 52850,
                'name' => 'Chicken Couscous',
                'category_id' => 2,
                'area_id' => 20,
                'instructions' => 'Heat the olive oil in a large frying pan and cook the onion for 1-2 mins just until softened. Add the chicken and fry for 7-10 mins until cooked through and the onions have turned golden. Grate over the ginger, stir through the harissa to coat everything and cook for 1 min more.

Tip in the apricots, chickpeas and couscous, then pour over the stock and stir once. Cover with a lid or tightly cover the pan with foil and leave for about 5 mins until the couscous has soaked up all the stock and is soft. Fluff up the couscous with a fork and scatter over the coriander to serve. Serve with extra harissa, if you like.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qxytrx1511304021.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=GZQGy9oscVk',
                'ingredients' => '[47,53,220,27,255,256,257,258,218,32]',
                'measurements' => '[30,140,102,95,84,251,252,102,13,245]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            60 => 
            array (
                'id' => 61,
                'tmdb_id' => 52853,
                'name' => 'Chocolate Avocado Mousse',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => '1. Blend all the mousse ingredients together in your food processor until smooth. Add the cacao powder first and, as you blend, have all the ingredients to hand in order to adjust the ratios slightly as the size of avocados and bananas varies so much. The perfect ratio in order to avoid the dish tasting too much of either is to use equal amounts of both.

2. Taste and add a few drops of stevia if you feel you need more sweetness.

3. Fill little cups or shot glasses with the mousse, sprinkle with the cacao powder or nibs and serve.

Tip If you don’t have a frozen banana to hand you can just use a normal one and then chill the mousse before serving for a cooling dessert.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uttuxy1511382180.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=wuZffe60q4M',
                'ingredients' => '[93,259,225,199,110,260,36,261]',
                'measurements' => '[32,73,32,84,5,5,75,95]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            61 => 
            array (
                'id' => 62,
                'tmdb_id' => 52856,
                'name' => 'Choc Chip Pecan Pie',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'First, make the pastry. Tip the ingredients into a food processor with 1 /4 tsp salt. Blend until the mixture resembles breadcrumbs. Drizzle 2-3 tsp cold water into the funnel while the blade is running – the mixture should start to clump together. Tip onto a work surface and bring together, kneading briefly into a ball. Pat into a disc, wrap in cling film, and chill for at least 20 mins. Heat oven to 200C/180C fan/gas 6.

Remove the pastry from the fridge and leave at room temperature for 5 mins to soften. Flour the work surface, then unwrap the pastry and roll to a circle the thickness of a £1 coin. Use the pastry to line a deep, 23cm round fluted tin – mine was about 3cm deep. Press the pastry into the corners and up the sides, making sure there are no gaps. Leave 1cm pastry overhanging (save some of the pastry scraps for later). Line with baking parchment (scrunch it up first to make it more pliable) and fill with baking beans. Blind-bake for 15-20 mins until the sides are set, then remove the parchment and beans and return to the oven for 5 mins until golden brown. Trim the pastry so it’s flush with the top of the tin – a small serrated knife is best for this. If there are any cracks, patch them up with the pastry scraps.

Meanwhile, weigh the butter, syrup and sugars into a pan, and add 1 /4 tsp salt. Heat until the butter has melted and the sugar dissolved, stirring until smooth. Remove from the heat and cool for 10 mins. Reduce oven to 160C/140C fan/gas 3.

Beat the eggs in a bowl. Add the syrup mixture, vanilla and pecans, and mix until well combined. Pour half the mixture into the tart case, scatter over half the chocolate chips, then cover with the remaining filling and chocolate chips. Bake on the middle shelf for 50-55 mins until set. Remove from the oven and leave to cool, then chill for at least 2 hrs before serving.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rqvwxt1511384809.jpg',
                'tags' => '[16,14,15,41]',
                'youtube_url' => 'https://www.youtube.com/watch?v=fDpoT0jvg4Y',
                'ingredients' => '[10,2,262,118,2,149,263,264,18,94,95,265]',
                'measurements' => '[9,116,121,77,81,13,79,121,60,5,42,102]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            62 => 
            array (
                'id' => 63,
                'tmdb_id' => 52860,
                'name' => 'Chocolate Raspberry Brownies',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Heat oven to 180C/160C fan/gas 4. Line a 20 x 30cm baking tray tin with baking parchment. Put the chocolate, butter and sugar in a pan and gently melt, stirring occasionally with a wooden spoon. Remove from the heat.
Stir the eggs, one by one, into the melted chocolate mixture. Sieve over the flour and cocoa, and stir in. Stir in half the raspberries, scrape into the tray, then scatter over the remaining raspberries. Bake on the middle shelf for 30 mins or, if you prefer a firmer texture, for 5 mins more. Cool before slicing into squares. Store in an airtight container for up to 3 days.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yypvst1511386427.jpg',
                'tags' => '[36,14,38]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Pi89PqsAaAg',
                'ingredients' => '[266,267,4,263,18,10,268,96]',
                'measurements' => '[102,121,79,42,147,67,113,102]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            63 => 
            array (
                'id' => 64,
                'tmdb_id' => 52870,
                'name' => 'Chickpea Fajitas',
                'category_id' => 4,
                'area_id' => 5,
                'instructions' => 'Heat oven to 200C/180C fan/gas 6 and line a baking tray with foil. Drain the chickpeas, pat dry and tip onto the prepared baking tray. Add the oil and paprika, toss to coat, then roast for 20-25 mins until browned and crisp, shaking halfway through cooking.

Meanwhile, put the tomatoes and onion in a small bowl with the vinegar and set aside to pickle. Put the avocado in another bowl and mash with a fork, leaving some larger chunks. Stir in the lime juice and season well. Mix the soured cream with the harissa and set aside until ready to serve.

Heat a griddle pan until nearly smoking. Add the tortillas , one at a time, charring each side until hot with griddle lines. 

Put everything on the table and build the fajitas : spread a little of the harissa cream over the tortilla, top with roasted chickpeas, guacamole, pickled salsa and coriander, if you like. Serve with the lime wedges for squeezing over.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tvtxpq1511464705.jpg',
                'tags' => '[42]',
                'youtube_url' => 'https://www.youtube.com/watch?v=LGY3V7EGpT0',
                'ingredients' => '[257,47,167,54,151,269,225,132,132,228,255,193,32]',
                'measurements' => '[42,253,95,254,107,37,32,146,159,121,37,60,12]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            64 => 
            array (
                'id' => 65,
                'tmdb_id' => 52875,
                'name' => 'Chicken Ham and Leek Pie',
                'category_id' => 2,
                'area_id' => 1,
                'instructions' => 'Heat the chicken stock in a lidded saucepan. Add the chicken breast and bring to a low simmer. Cover with a lid and cook for 10 minutes. Remove the chicken breasts from the water with tongs and place on a plate. Pour the cooking liquor into a large jug.
Melt 25g/1oz of the butter in a large heavy-based saucepan over a low heat. Stir in the leeks and fry gently for two minutes, stirring occasionally until just softened. Add the garlic and cook for a further minute. Add the remaining butter and stir in the flour as soon as the butter has melted. Cook for 30 seconds, stirring constantly.
Slowly pour the milk into the pan, just a little at a time, stirring well between each adding. Gradually add 250ml/10fl oz of the reserved stock and the wine, if using, stirring until the sauce is smooth and thickened slightly. Bring to a gentle simmer and cook for 3 minutes.
Season the mixture, to taste, with salt and freshly ground black pepper. Remove from the heat and stir in the cream. Pour into a large bowl and cover the surface of the sauce with cling ilm to prevent a skin forming. Set aside to cool.
Preheat the oven to 200C/400F/Gas 6. Put a baking tray in the oven to heat.
For the pastry, put the flour and butter in a food processor and blend on the pulse setting until the mixture resembles fine breadcrumbs. With the motor running, add the beaten egg and water and blend until the mixture forms a ball. Portion off 250g/10oz of pastry for the lid.
Roll the remaining pastry out on a lightly floured surface, turning the pastry frequently until around 5mm/¼in thick and 4cm/1½in larger than the pie dish. Lift the pastry over the rolling pin and place it gently into the pie dish. Press the pastry firmly up the sides, making sure there are no air bubbles. Leave the excess pastry overhanging the sides.
Cut the chicken breasts into 3cm/1¼in pieces. Stir the chicken, ham and leeks into the cooled sauce. Pour the chicken filling into the pie dish. Brush the rim of the dish with beaten egg. Roll out the reserved pastry for the lid.
Cover the pie with the pastry lid and press the edges together firmly to seal. Trim any excess pastry.
Make a small hole in the centre of the pie with the tip of a knife. Glaze the top of the pie with beaten egg. Bake on the preheated tray in the centre of the oven for 35-40 minutes or until the pie is golden-brown all over and the filling is piping hot.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xrrtss1511555269.jpg',
                'tags' => '[16,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=xr-CpPE_lNk',
                'ingredients' => '[218,220,2,86,55,10,16,214,43,270,261,102,10,2,40,38,40]',
                'measurements' => '[255,57,116,123,99,113,13,20,103,81,96,95,122,102,32,77,32]',
                'created_at' => '2025-04-15 09:39:17',
                'updated_at' => '2025-04-15 09:39:17',
            ),
            65 => 
            array (
                'id' => 66,
                'tmdb_id' => 52879,
                'name' => 'Chicken Parmentier',
                'category_id' => 2,
                'area_id' => 7,
                'instructions' => 'For the topping, boil the potatoes in salted water until tender. Drain and push through a potato ricer, or mash thoroughly. Stir in the butter, cream and egg yolks. Season and set aside.
For the filling, melt the butter in a large pan. Add the shallots, carrots and celery and gently fry until soft, then add the garlic. Pour in the wine and cook for 1 minute. Stir in the tomato purée, chopped tomatoes and stock and cook for 10–15 minutes, until thickened. Add the shredded chicken, olives and parsley. Season to taste with salt and pepper.
Preheat the oven to 180C/160C Fan/Gas 4.
Put the filling in a 20x30cm/8x12in ovenproof dish and top with the mashed potato. Grate over the Gruyère. Bake for 30–35 minutes, until piping hot and the potato is golden-brown.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uwvxpv1511557015.jpg',
                'tags' => '[7,18]',
                'youtube_url' => 'https://www.youtube.com/watch?v=tiG-xlmeyjg',
                'ingredients' => '[66,2,43,51,2,103,64,85,28,214,123,271,218,129,145,83,272]',
                'measurements' => '[130,10,249,4,10,256,164,248,85,257,77,42,258,115,22,25,113]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            66 => 
            array (
                'id' => 67,
                'tmdb_id' => 52897,
                'name' => 'Carrot Cake',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'For the carrot cake, preheat the oven to 160C/325F/Gas 3. Grease and line a 26cm/10in springform cake tin.
Mix all of the ingredients for the carrot cake, except the carrots and walnuts, together in a bowl until well combined. Stir in the carrots and walnuts.
Spoon the mixture into the cake tin and bake for 1 hour 15 minutes, or until a skewer inserted into the middle comes out clean. Remove the cake from the oven and set aside to cool for 10 minutes, then carefully remove the cake from the tin and set aside to cool completely on a cooling rack.
Meanwhile, for the icing, beat the cream cheese, caster sugar and butter together in a bowl until fluffy. Spread the icing over the top of the cake with a palette knife.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vrspxv1511722107.jpg',
                'tags' => '[19,21,15]',
                'youtube_url' => 'https://www.youtube.com/watch?v=asjZ7iTrGKA',
                'ingredients' => '[135,10,178,23,18,21,14,64,273,262,5,2]',
                'measurements' => '[255,42,37,259,174,33,37,260,81,102,81,121]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            67 => 
            array (
                'id' => 68,
                'tmdb_id' => 52898,
                'name' => 'Chelsea Buns',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Sift the flour and salt into a large bowl. Make a well in the middle and add the yeast.
Meanwhile, warm the milk and butter in a saucepan until the butter melts and the mixture is lukewarm.
Add the milk mixture and egg to the flour mixture and stir until the contents of the bowl come together as a soft dough. (You may need to add a little extra flour.)
Tip the dough onto a generously floured work surface. Knead for five minutes, adding more flour if necessary, until the dough is smooth and elastic and no longer feels sticky.
Lightly oil a bowl with a little of the vegetable oil. Place the dough into the bowl and turn until it is covered in the oil. Cover the bowl with cling film and set aside in a warm place for one hour, or until the dough has doubled in size.
Lightly grease a baking tray.
For the filling, knock the dough back to its original size and turn out onto a lightly floured work surface. Roll the dough out into a rectangle 0.5cm/¼in thick. Brush all over with the melted butter, then sprinkle over the brown sugar, cinnamon and dried fruit.
Roll the dough up into a tight cylinder , cut ten 4cm/1½in slice and place them onto a lightly greased baking sheet, leaving a little space between each slice. Cover with a tea towel and set aside to rise for 30 minutes.
Preheat oven to 190C/375F/Gas 5.
Bake the buns in the oven for 20-25 minutes, or until risen and golden-brown.
Meanwhile, for the glaze, heat the milk and sugar in a saucepan until boiling. Reduce the heat and simmer for 2-3 minutes.
Remove the buns from the oven and brush with the glaze, then set aside to cool on a wire rack.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vqpwrv1511723001.jpg',
                'tags' => '[10,2,21]',
                'youtube_url' => 'https://www.youtube.com/watch?v=i_zemP3yBKw',
                'ingredients' => '[274,21,126,16,2,18,135,2,275,14,276,16,5]',
                'measurements' => '[47,5,127,118,175,32,44,18,116,37,81,25,25]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            68 => 
            array (
                'id' => 69,
                'tmdb_id' => 52905,
                'name' => 'Chocolate Souffle',
                'category_id' => 1,
                'area_id' => 7,
                'instructions' => 'Heat oven to 220C/fan 200C/gas 7 and place a baking tray on the top shelf. For the sauce, heat the cream and sugar until boiling. Remove from the heat, stir in the chocolate and butter until melted, then keep warm.
Brush 6 x 150ml ramekins with melted butter, sprinkle with the 2 tbsp caster sugar, then tip out any excess. Melt the chocolate and cream in a bowl over a pan of simmering water, cool, then mix in the egg yolks. Whisk the egg whites until they hold their shape, then add the sugar, 1 tbsp at a time, whisking back to the same consistency. Mix a spoonful into the chocolate, then gently fold in the rest.
Working quickly, fill the ramekins, wipe the rims clean and run your thumb around the edges. Turn oven down to 200C/fan 180C/gas 6, place the ramekins onto the baking tray, then bake for 8-10 mins until risen with a slight wobble. Don’t open the oven door too early as this may make them collapse.
Once the soufflés are ready, dust with icing sugar, scoop a small hole from their tops, then pour in some of the hot chocolate sauce. Replace the lids and serve straight away.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/twspvx1511784937.jpg',
                'tags' => '[27,14,4,36]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FWqfkUEWOTg',
                'ingredients' => '[277,5,266,2,2,5,266,43,51,177,43,118]',
                'measurements' => '[261,18,121,18,262,113,100,25,60,174,25,12]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            69 => 
            array (
                'id' => 70,
                'tmdb_id' => 52910,
                'name' => 'Chinon Apple Tarts',
                'category_id' => 1,
                'area_id' => 7,
                'instructions' => 'To make the red wine jelly, put the red wine, jam sugar, star anise, clove, cinnamon stick, allspice, split vanilla pod and seeds in a medium saucepan. Stir together, then heat gently to dissolve the sugar. Turn up the heat and boil for 20 mins until reduced and syrupy. Strain into a small, sterilised jam jar and leave to cool completely. Will keep in the fridge for up to 1 month.

Take the pastry out of the fridge and leave at room temperature for 10 mins, then unroll. Heat the grill to high and heat the oven to 180C/160C fan/gas 4. Cut out 2 x 13cm circles of pastry, using a plate as a guide, and place on a non-stick baking sheet. Sprinkle each circle with 1 tbsp sugar and grill for 5 mins to caramelise, watching carefully so that the sugar doesn’t burn. Remove from the grill. Can be done a few hours ahead, and left, covered, out of the fridge.

Peel, quarter and core the apples, cut into 2mm-thin slices and arrange on top of the pastry. Sprinkle over the remaining sugar and pop in the oven for 20-25 mins until the pastry is cooked through and golden, and the apples are softened. Remove and allow to cool slightly. Warm 3 tbsp of the red wine jelly in a small pan over a low heat with 1 tsp water to make it a little more runny, then brush over the top of the tarts.

Tip the crème fraîche into a bowl, sift over the icing sugar and cardamom, and mix together. Carefully lift the warm tarts onto serving plates and serve with the cardamom crème fraîche.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qtqwwu1511792650.jpg',
                'tags' => '[1,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=5dAW9HQgtCk',
                'ingredients' => '[50,264,11,278,82,118,125]',
                'measurements' => '[263,182,57,182,82,117,57]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            70 => 
            array (
                'id' => 71,
                'tmdb_id' => 52920,
                'name' => 'Chicken Marengo',
                'category_id' => 2,
                'area_id' => 7,
                'instructions' => 'Heat the oil in a large flameproof casserole dish and stir-fry the mushrooms until they start to soften. Add the chicken legs and cook briefly on each side to colour them a little.
Pour in the passata, crumble in the stock cube and stir in the olives. Season with black pepper – you shouldn’t need salt. Cover and simmer for 40 mins until the chicken is tender. Sprinkle with parsley and serve with pasta and a salad, or mash and green veg, if you like.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qpxvuq1511798906.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=U33HYUr-0Fw',
                'ingredients' => '[47,45,239,250,187,145,83]',
                'measurements' => '[117,9,60,47,32,121,159]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            71 => 
            array (
                'id' => 72,
                'tmdb_id' => 52923,
                'name' => 'Canadian Butter Tarts',
                'category_id' => 1,
                'area_id' => 8,
            'instructions' => 'Preheat the oven to fan 170C/ conventional 190C/gas 5. Roll out the pastry on a lightly floured surface so it’s slightly thinner than straight from the pack. Then cut out 18-20 rounds with a 7.5cm fluted cutter, re-rolling the trimmings. Use the rounds to line two deep 12-hole tart tins (not muffin tins). If you only have a regular-sized, 12-hole tart tin you will be able to make a few more slightly shallower tarts.
Beat the eggs in a large bowl and combine with the rest of the ingredients except the walnuts. Tip this mixture into a pan and stir continuously for 3-4 minutes until the butter melts, and the mixture bubbles and starts to thicken. It should be thick enough to coat the back of a wooden spoon. Don’t overcook, and be sure to stir all the time as the mixture can easily burn. Remove from the heat and stir in the nuts.
Spoon the filling into the unbaked tart shells so it’s level with the pastry. Bake for 15-18 minutes until set and pale golden. Leave in the tin to cool for a few minutes before lifting out on to a wire rack. Serve warm or cold.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wpputp1511812960.jpg',
                'tags' => '[22,38,14,4]',
                'youtube_url' => 'https://www.youtube.com/watch?v=WUpaOGghOdo',
                'ingredients' => '[279,18,280,281,94,2,277,273]',
                'measurements' => '[126,161,100,121,5,113,264,113]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            72 => 
            array (
                'id' => 73,
                'tmdb_id' => 52934,
                'name' => 'Chicken Basquaise',
                'category_id' => 2,
                'area_id' => 7,
                'instructions' => 'Preheat the oven to 180°C/Gas mark 4. Have the chicken joints ready to cook. Heat the butter and 3 tbsp olive oil in a flameproof casserole or large frying pan. Brown the chicken pieces in batches on both sides, seasoning them with salt and pepper as you go. Don\'t crowd the pan - fry the chicken in small batches, removing the pieces to kitchen paper as they are done.

Add a little more olive oil to the casserole and fry the onions over a medium heat for 10 minutes, stirring frequently, until softened but not browned. Add the rest of the oil, then the peppers and cook for another 5 minutes.

Add the chorizo, sun-dried tomatoes and garlic and cook for 2-3 minutes. Add the rice, stirring to ensure it is well coated in the oil. Stir in the tomato paste, paprika, bay leaves and chopped thyme. Pour in the stock and wine. When the liquid starts to bubble, turn the heat down to a gentle simmer. Press the rice down into the liquid if it isn\'t already submerged and place the chicken on top. Add the lemon wedges and olives around the chicken.

Cover and cook in the oven for 50 minutes. The rice should be cooked but still have some bite, and the chicken should have juices that run clear when pierced in the thickest part with a knife. If not, cook for another 5 minutes and check again.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wruvqv1511880994.jpg',
                'tags' => '[7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=emfm6TwsVhg',
                'ingredients' => '[129,2,47,151,131,71,282,55,283,123,167,62,60,218,284,147,145,21,102]',
                'measurements' => '[130,18,134,123,62,265,24,266,9,262,33,60,245,258,128,4,121,12,12]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            73 => 
            array (
                'id' => 74,
                'tmdb_id' => 52939,
                'name' => 'Callaloo Jamaican Style',
                'category_id' => 6,
                'area_id' => 9,
                'instructions' => 'Cut leaves and soft stems from the kale branches, them soak in a bowl of cold water for about 5-10 minutes or until finish with prep.
Proceed to slicing the onions, mincing the garlic and dicing the tomatoes. Set aside
Remove kale from water cut in chunks.
Place bacon on saucepan and cook until crispy. Then add onions, garlic, thyme, stir for about a minute or more
Add tomatoes; scotch bonnet pepper, smoked paprika. Sauté for about 2-3 more minutes.
Finally add vegetable, salt, mix well, and steamed for about 6-8 minutes or until leaves are tender. Add a tiny bit of water as needed. Adjust seasonings and turn off the heat.
Using a sharp knife cut both ends off the plantain. This will make it easy to grab the skin of the plantains. Slit a shallow line down the long seam of the plantain; peel only as deep as the peel. Remove plantain peel by pulling it back.
Slice the plantain into medium size lengthwise slices and set aside.
Coat a large frying pan with cooking oil spray. Spray the tops of the plantains with a generous layer of oil spray and sprinkle with salt, freshly ground pepper.
Let the plantains "fry" on medium heat, shaking the frying pan to redistribute them every few minutes.
As the plantains brown, continue to add more cooking oil spray, salt and pepper (if needed) until they have reached the desired color and texture.
Remove and serve with kale',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ussyxw1515364536.jpg',
                'tags' => '[37]',
                'youtube_url' => 'https://www.youtube.com/watch?v=bCr3GasJWwE',
                'ingredients' => '[285,104,55,53,167,60,130,131,93,135]',
                'measurements' => '[171,150,267,87,17,59,32,32,60,105]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            74 => 
            array (
                'id' => 75,
                'tmdb_id' => 52956,
                'name' => 'Chicken Congee',
                'category_id' => 2,
                'area_id' => 10,
                'instructions' => 'STEP 1 - MARINATING THE CHICKEN
In a bowl, add chicken, salt, white pepper, ginger juice and then mix it together well.
Set the chicken aside.
STEP 2 - RINSE THE WHITE RICE
Rinse the rice in a metal bowl or pot a couple times and then drain the water.
STEP 2 - BOILING THE WHITE RICE
Next add 8 cups of water and then set the stove on high heat until it is boiling. Once rice porridge starts to boil, set the stove on low heat and then stir it once every 8-10 minutes for around 20-25 minutes.
After 25 minutes, this is optional but you can add a little bit more water to make rice porridge to make it less thick or to your preference.
Next add the marinated chicken to the rice porridge and leave the stove on low heat for another 10 minutes.
After an additional 10 minutes add the green onions, sliced ginger, 1 pinch of salt, 1 pinch of white pepper and stir for 10 seconds.
Serve the rice porridge in a bowl
Optional: add Coriander on top of the rice porridge.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529446352.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=kqEfk801E94',
                'ingredients' => '[129,21,102,286,27,176,155,36,32]',
                'measurements' => '[268,95,95,5,5,117,132,269,158]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            75 => 
            array (
                'id' => 76,
                'tmdb_id' => 52966,
                'name' => 'Chocolate Caramel Crispy',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Grease and line a 20 x 20cm/8" x 8" baking tin with parchment paper.
Put the mars bars and butter in a heat proof bowl and place over a pan of barely simmering water. Mixing with a whisk, melt until the mixture is smooth.
Pour over the rice krispies in a mixing bowl and mix until all the ingredients are evenly combined. Press evenly into the prepare baking tin and set aside.
Melt the milk chocolate in the microwave or over a pan of barely simmering water.
Spread the melted chocolate over the rice krispie mixture and leave to set in a cool place. Once set slice into squares and serve!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1550442508.jpg',
                'tags' => '[15,38,21,1,5,43]',
                'youtube_url' => 'https://www.youtube.com/watch?v=qsk_At_gjv0',
                'ingredients' => '[287,2,288,267]',
                'measurements' => '[270,81,7,81]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            76 => 
            array (
                'id' => 77,
                'tmdb_id' => 52969,
                'name' => 'Chakchouka ',
                'category_id' => 6,
                'area_id' => 21,
            'instructions' => 'In a large cast iron skillet or sauté pan with a lid, heat oil over medium high heat. Add the onion and sauté for 2-3 minutes, until softened. Add the peppers and garlic, and sauté for an additional 3-5 minutes. Add the tomatoes, cumin, paprika, salt, and chili powder. Mix well and bring the mixture to a simmer. Reduce the heat to medium low and continue to simmer, uncovered, 10-15 minutes until the mixture has thickened to your desired consistency. (Taste the sauce at this point and adjust for salt and spice, as desired.) Using the back of a spoon, make four craters in the mixture, large enough to hold an egg. Crack one egg into each of the craters. Cover the skillet and simmer for 5-7 minutes, until the eggs have set. Serve immediately with crusty bread or pita.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/gpz67p1560458984.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=EHKNu93MSx4',
                'ingredients' => '[54,47,53,131,183,55,31,167,21,289,18]',
                'measurements' => '[60,25,165,86,86,271,5,5,272,210,60]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            77 => 
            array (
                'id' => 78,
                'tmdb_id' => 52976,
                'name' => 'Cashew Ghoriba Biscuits',
                'category_id' => 1,
                'area_id' => 21,
                'instructions' => 'Preheat the oven at 180 C / Gas 4. Line a baking tray with greaseproof paper.
In a bowl, mix the cashews and icing sugar. Add the egg yolks and orange blossom water and mix to a smooth homogeneous paste.
Take lumps of the cashew paste and shape into small balls. Roll the balls in icing sugar and transfer to the baking tray. Push an almond in the centre of each ghribia.
Bake until the biscuits are lightly golden, about 20 minutes. Keep an eye on them, they burn quickly.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/t3r3ka1560461972.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=IqXEZUk4hWI',
                'ingredients' => '[290,118,51,291,118,114]',
                'measurements' => '[79,121,4,25,112,121]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            78 => 
            array (
                'id' => 79,
                'tmdb_id' => 52977,
                'name' => 'Corba',
                'category_id' => 7,
                'area_id' => 22,
                'instructions' => 'Pick through your lentils for any foreign debris, rinse them 2 or 3 times, drain, and set aside.  Fair warning, this will probably turn your lentils into a solid block that you’ll have to break up later
In a large pot over medium-high heat, sauté the olive oil and the onion with a pinch of salt for about 3 minutes, then add the carrots and cook for another 3 minutes.
Add the tomato paste and stir it around for around 1 minute. Now add the cumin, paprika, mint, thyme, black pepper, and red pepper as quickly as you can and stir for 10 seconds to bloom the spices. Congratulate yourself on how amazing your house now smells.
Immediately add the lentils, water, broth, and salt. Bring the soup to a (gentle) boil.
After it has come to a boil, reduce heat to medium-low, cover the pot halfway, and cook for 15-20 minutes or until the lentils have fallen apart and the carrots are completely cooked.
After the soup has cooked and the lentils are tender, blend the soup either in a blender or simply use a hand blender to reach the consistency you desire. Taste for seasoning and add more salt if necessary.
Serve with crushed-up crackers, torn up bread, or something else to add some extra thickness.  You could also use a traditional thickener (like cornstarch or flour), but I prefer to add crackers for some texture and saltiness.  Makes great leftovers, stays good in the fridge for about a week.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/58oia61564916529.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=VVnZd8A84z4',
                'ingredients' => '[292,53,64,123,31,167,112,60,182,213,87,36,261]',
                'measurements' => '[27,50,50,117,37,5,17,17,273,273,167,27,95]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            79 => 
            array (
                'id' => 80,
                'tmdb_id' => 52988,
                'name' => 'Classic Christmas pudding',
                'category_id' => 1,
                'area_id' => 1,
            'instructions' => 'Get everything for the pudding prepared. Chop the almonds coarsely. Peel, core and chop the cooking apples. Sharpen your knife and chop the candied peel. (You can chop the almonds and apples in a food processor, but the peel must be done by hand.) Grate three quarters of the nutmeg (sounds a lot but it\'s correct).

Mix the almonds, apples, candied peel, nutmeg, raisins, flour, breadcrumbs, light muscovado sugar, eggs and 2 tbsp brandy or cognac in a large bowl. 

Holding the butter in its wrapper, grate a quarter of it into the bowl, then stir everything together. Repeat until all the butter is grated, then stir for 3-4 mins – the mixture is ready when it subsides slightly after each stir. Ask the family to stir too, and get everyone to make a wish. 

Generously butter two 1.2 litre bowls and put a circle of baking parchment in the bottom of each. Pack in the pudding mixture. Cover with a double layer of baking parchment, pleating it to allow for expansion, then tie with string (keep the paper in place with a rubber band while tying). Trim off any excess paper. 

Now stand each bowl on a large sheet of foil and bring the edges up over the top, then put another sheet of foil over the top and bring it down underneath to make a double package (this makes the puddings watertight). Tie with more string, and make a handle for easy lifting in and out of the pan. Watch our video to see how to tie up a pudding correctly.

Boil or oven steam the puddings for 8 hrs, topping up with water as necessary. Remove from the pans and leave to cool overnight. When cold, discard the messy wrappings and re-wrap in new baking parchment, foil and string. Store in a cool, dry place until Christmas. 

To make the brandy butter, cream the butter with the orange zest and icing sugar. Gradually beat in the brandy or cognac and chopped stem ginger. Put in a small bowl, fork the top attractively and put in the fridge to set. The butter will keep for a week in the fridge, or it can be frozen for up to six weeks. 

On Christmas Day, boil or oven steam for 1 hr. Unwrap and turn out. To flame, warm 3-4 tbsp brandy in a small pan, pour it over the pudding and set light to it.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1d85821576790598.jpg',
                'tags' => '[44]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Pb_lJxL1vtk',
                'ingredients' => '[114,3,293,44,281,10,150,280,18,240,2]',
                'measurements' => '[113,161,102,139,69,67,121,121,62,25,79]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            80 => 
            array (
                'id' => 81,
                'tmdb_id' => 52989,
                'name' => 'Christmas Pudding Trifle',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Peel the oranges using a sharp knife, ensuring all the pith is removed. Slice as thinly as possible and arrange over a dinner plate. Sprinkle with the demerara sugar followed by the Grand Marnier and set aside.

Crumble the Christmas pudding into large pieces and scatter over the bottom of a trifle bowl. Lift the oranges onto the pudding in a layer and pour over any juices.

Beat the mascarpone until smooth, then stir in the custard. Spoon the mixture over the top of the oranges.

Lightly whip the cream and spoon over the custard. Sprinkle with the flaked almonds and grated chocolate. You can make this a day in advance if you like, chill until ready to serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/r33cud1576791081.jpg',
                'tags' => '[44]',
                'youtube_url' => 'https://www.youtube.com/watch?v=jRfyNQs5qhU',
                'ingredients' => '[202,12,294,204,295,296,43,9,266]',
                'measurements' => '[57,117,25,9,47,79,274,245,114]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            81 => 
            array (
                'id' => 82,
                'tmdb_id' => 52990,
                'name' => 'Christmas cake',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Heat oven to 160C/fan 140C/gas 3. Line the base and sides of a 20 cm round, 7.5 cm deep cake tin. Beat the butter and sugar with an electric hand mixer for 1-2 mins until very creamy and pale in colour, scraping down the sides of the bowl half way through. Stir in a spoonful of the flour, then stir in the beaten egg and the rest of the flour alternately, a quarter at a time, beating well each time with a wooden spoon. Stir in the almonds.

Mix in the sherry (the mix will look curdled), then add the peel, cherries, raisins, cherries, nuts, lemon zest, spice, rosewater and vanilla. Beat together to mix, then stir in the baking powder.

Spoon mixture into the tin and smooth the top, making a slight dip in the centre. Bake for 30 mins, then lower temperature to 150C/fan 130C/gas 2 and bake a further 2-2¼ hrs, until a skewer insterted in the middle comes out clean. Leave to cool in the tin, then take out of the tin and peel off the lining paper. When completely cold, wrap well in cling film and foil to store until ready to decorate. The cake will keep for several months.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ldnrm91576791881.jpg',
                'tags' => '[44]',
                'youtube_url' => 'https://www.youtube.com/watch?v=34yeL8TstO0',
                'ingredients' => '[2,280,10,18,7,297,293,298,281,299,95,109,300,301,94,20]',
                'measurements' => '[102,102,102,275,113,82,276,276,79,79,121,277,278,278,17,17]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            82 => 
            array (
                'id' => 83,
                'tmdb_id' => 52998,
                'name' => 'Corned Beef and Cabbage',
                'category_id' => 3,
                'area_id' => 15,
                'instructions' => '1

Place corned beef in large pot or Dutch oven and cover with water. Add the spice packet that came with the corned beef. Cover pot and bring to a boil, then reduce to a simmer. Simmer approximately 50 minutes per pound or until tender.

2

Add whole potatoes and peeled and cut carrots, and cook until the vegetables are almost tender. Add cabbage and cook for 15 more minutes. Remove meat and let rest 15 minutes.

3

Place vegetables in a bowl and cover. Add as much broth (cooking liquid reserved in the Dutch oven or large pot) as you want. Slice meat across the grain.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xb97a81583266727.jpg',
                'tags' => '[45]',
                'youtube_url' => '',
                'ingredients' => '[59,302,64,169]',
                'measurements' => '[279,251,174,280]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            83 => 
            array (
                'id' => 84,
                'tmdb_id' => 52999,
                'name' => 'Crispy Sausages and Greens',
                'category_id' => 10,
                'area_id' => 15,
            'instructions' => 'Preheat the oven to 350°. Remove the stems from one bunch of Tuscan kale and tear the leaves into 1" pieces (mustard greens, collards, spinach, and chard are great, too). Coarsely chop half a head of green cabbage. Combine the greens in a large baking dish and add 4 cloves of thinly sliced garlic. Adding some sliced onions and shiitake mushrooms at this point is optional, but highly recommended (I\'ll sauté the onions and mushrooms in a cast iron baking dish right on the stove before adding to the greens). Coat the greens with some olive oil and pour ½ cup chicken stock or broth over everything. Cover the dish with foil and bake until the greens are wilted, about 15 minutes. Remove foil and season with salt and pepper. Continue to bake until cabbage is tender, about 20-25 minutes more.

Meanwhile, heat a little olive oil in a large skillet over medium-high. Prick four sweet Italian sausages with a fork and cook until browned on all sides and cooked through, 10 to 12 minutes. When the greens are done, slice the sausage and toss into the greens with a splash of your favorite vinegar (I like sherry or red wine).',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/st1ifa1583267248.jpg',
                'tags' => '[]',
                'youtube_url' => '',
                'ingredients' => '[285,303,169,28,53,304,218,21,102]',
                'measurements' => '[171,24,90,24,281,281,27]',
                'created_at' => '2025-04-15 09:39:18',
                'updated_at' => '2025-04-15 09:39:18',
            ),
            84 => 
            array (
                'id' => 85,
                'tmdb_id' => 53011,
                'name' => 'Chicken Quinoa Greek Salad',
                'category_id' => 2,
                'area_id' => 23,
                'instructions' => 'Cook the quinoa following the pack instructions, then rinse in cold water and drain thoroughly.

Meanwhile, mix the butter, chilli and garlic into a paste. Toss the chicken fillets in 2 tsp of the olive oil with some seasoning. Lay in a hot griddle pan and cook for 3-4 mins each side or until cooked through. Transfer to a plate, dot with the spicy butter and set aside to melt.

Next, tip the tomatoes, olives, onion, feta and mint into a bowl. Toss in the cooked quinoa. Stir through the remaining olive oil, lemon juice and zest, and season well. Serve with the chicken fillets on top, drizzled with any buttery chicken juices.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/k29viq1585565980.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=akcrkXYr61M',
                'ingredients' => '[305,2,243,55,220,47,145,151,306,112,109]',
                'measurements' => '[196,18,140,222,42,25,245,140,121,159,282]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            85 => 
            array (
                'id' => 86,
                'tmdb_id' => 53016,
                'name' => 'Chick-Fil-A Sandwich',
                'category_id' => 2,
                'area_id' => 4,
                'instructions' => 'Wrap the chicken loosely between plastic wrap and pound gently with the flat side of a meat tenderizer until about 1/2 inch thick all around.
Cut into two pieces, as even as possible.
Marinate in the pickle juice for 30 minutes to one hour (add a teaspoon of Tabasco sauce now for a spicy sandwich).
Beat the egg with the milk in a bowl.
Combine the flour, sugar, and spices in another bowl.
Dip the chicken pieces each into the egg on both sides, then coat in flour on both sides.
Heat the oil in a skillet (1/2 inch deep) to about 345-350.
Fry each cutlet for 2 minutes on each side, or until golden and cooked through.
Blot on paper and serve on toasted buns with pickle slices.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sbx7n71587673021.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=1WDesu7bUDM',
                'ingredients' => '[220,307,137,16,19,118,167,21,182,166,308,29,47,159]',
                'measurements' => '[32,163,32,163,132,117,17,17,273,273,273,17,27,32]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            86 => 
            array (
                'id' => 87,
                'tmdb_id' => 53037,
                'name' => 'Coddled pork with cider',
                'category_id' => 10,
                'area_id' => 15,
                'instructions' => 'STEP 1
Heat the butter in a casserole dish until sizzling, then fry the pork for 2-3 mins on each side until browned. Remove from the pan.

STEP 2
Tip the bacon, carrot, potatoes and swede into the pan, then gently fry until slightly coloured. Stir in the cabbage, sit the chops back on top, add the bay leaf, then pour over the cider and stock. Cover the pan, then leave everything to gently simmer for 20 mins until the pork is cooked through and the vegetables are tender.

STEP 3
Serve at the table spooned straight from the dish.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/7vpsfp1608588991.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ftn_4mc-65o',
                'ingredients' => '[2,309,104,66,64,97,169,99,310,218]',
                'measurements' => '[283,4,60,4,32,142,142,32,82,121]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            87 => 
            array (
                'id' => 88,
                'tmdb_id' => 53055,
                'name' => 'Cevapi Sausages',
                'category_id' => 3,
                'area_id' => 16,
                'instructions' => 'Place the ground meat in a bowl. Chop the onion very finely and grate the garlic cloves. Add to the bowl. Add the chopped parsley, all sorts of paprika, baking soda, dried breadcrumbs, water, Vegeta, salt, and pepper.
Mix well with the hand mixer fitted with the dough hooks. Cover the bowl with cling film/ plastic foil and leave to rest for 1 or 2 hours in the refrigerator.
Take portions of the meat mixture, about 50-55 g/ 1.7-1.9 oz/ ¼ cup portions, and form the cevapi. The rolls should be about as thick as your thumb and about 7-10 cm/ 3-4 inches long. I had 18 sausages. The recipe can be easily doubled.
Grill the cevapcici on the hot grill pan or on the barbecue for about 12-14 minutes, turning them several times in between, or until brown and cooked through. I checked by cutting one in the middle and then grilling the following batches for the same period of time.
Serve hot as suggested above. The cevapcici can be reheated in the oven at 180 degrees Celsius/ 350 degrees Fahrenheit for about 10 minutes or until heated through. Check one, if it is not hot enough, give the sausages a few more minutes.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vc08jn1628769553.jpg',
                'tags' => '[46]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_MpSxSgS7f8',
                'ingredients' => '[158,311,53,55,83,167,20,150,36,251,21,102]',
                'measurements' => '[47,79,32,70,104,117,272,25,20,32,5,5]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            88 => 
            array (
                'id' => 89,
                'tmdb_id' => 53056,
                'name' => 'Croatian lamb peka',
                'category_id' => 3,
                'area_id' => 16,
                'instructions' => 'Preheat oven to 200°C fan / 220°C / 425°F / Gas mark 7
If you have not bought diced lamb, cut your lamb shoulder or leg into large chunks and place to one side.
Chunks of chopped lamb of a red chopping board
Make oil marinade -
Mix 80ml of olive oil in a bowl with garlic puree, sundried tomato puree ,black pepper and salt.
olive oil, gia sundried tomato puree and gia garlic puree and black pepper mixed together in a silver bowl to make Croatian peka
Add potatoes and vegetables into a large lidded casserole dish.
Chopped up vegetables which consist of chopped up red onion, courgette, potatoes red peppers in a cast iron pan
Place diced lamb on top of the vegetables, pour the marinade and wine over the top.
Chunks of lamb covered in in a sundried tomato oil sauce which is on top of chopped red onion, aubergine, courgette and potatoes in a cast iron pan
Add the rosemary, thyme and sage, trying to keep the herbs on top.
So you can easily remove the herb stalks once cooked.
Chunks of lamb coated in a sundried tomato oil sauce and covered with thyme, rosemary and sage which is on top of chopped red onion, aubergine, courgette and potatoes in a cast iron pan
Place lid on the casserole dish and cook for 1hr 30 minute
If you do not have a lid cover very well with kitchen foil
Cast iron dish with lid on in the oven
Take the lid off, remove any thick herb stems. Stir in 2 tbsp of olive oil.
Cook for a further 20-30 mins.
Cooked Croatian Lamb Peka in a cast iron pan in the oven
Serve with fresh homemade bread to dip into the juices.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/pn59o51628769837.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=K0ipnz4fwJI',
                'ingredients' => '[66,312,64,183,52,53,313,314,123,47,60,214,102]',
                'measurements' => '[115,140,140,140,284,285,286,117,117,287,149,288,95]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            89 => 
            array (
                'id' => 90,
                'tmdb_id' => 53058,
                'name' => 'Croatian Bean Stew',
                'category_id' => 3,
                'area_id' => 16,
                'instructions' => 'Heat the oil in a pan. Add the chopped vegetables and sauté until tender. Take a pot, empty the beans together with the vegetables into it, put the sausages inside and cook for further 20 minutes on a low heat. Or, put it in an oven and bake it at a temperature of 180ºC/350ºF for 30 minutes. This dish is even better reheated the next day.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tnwy8m1628770384.jpg',
                'tags' => '[31,32,47]',
                'youtube_url' => 'https://www.youtube.com/watch?v=mrjnQal3S1A',
                'ingredients' => '[188,135,54,26,55,83,71]',
                'measurements' => '[289,20,61,174,154,95,290]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            90 => 
            array (
                'id' => 91,
                'tmdb_id' => 53063,
                'name' => 'Chivito uruguayo',
                'category_id' => 3,
                'area_id' => 24,
                'instructions' => 'Crush the meat so that it is finite and we put it on a griddle to brown. Put the eggs, bacon and ham to fry.
Cut the bread in half, put the beef brisket, the fried eggs, the bacon, the ham, the mozzarella, the tomato and the lettuce. Cover with the other half of the bread and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/n7qnkb1630444129.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=0PXbbL1QdaA&ab_channel=D%C3%ADadeCocina',
                'ingredients' => '[59,41,246,130,270,315,104,137,53,102]',
                'measurements' => '[4,4,32,32,121,121,121,32,32,32]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            91 => 
            array (
                'id' => 92,
                'tmdb_id' => 53072,
                'name' => 'Crispy Eggplant',
                'category_id' => 4,
                'area_id' => 17,
            'instructions' => 'Slice eggplant into 1 cm (0.4-inch) slices. Place them in a bowl and sprinkle them with salt. allow them to sit for 30 minutes to render some of their liquid and bitterness.
2. After 30 minutes wash eggplant slices from salt and pat dry with a kitchen towel.
3. In a large bowl/plate place breadcrumbs and sesame seeds. In another bowl beat 2 eggs with pinch salt and pepper.
4. Heal oil in a large skillet over high heat.
5. Dip eggplant slices in egg, then in crumbs, and place in hot oil. Fry 2 to 3 minutes on each side, or until golden brown. Drain on a paper towel. 
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/c7lzrl1683208757.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=4mINk5d2hto',
                'ingredients' => '[316,150,317,18,21,102,135]',
                'measurements' => '[50,27,113,4,152,152,137]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            92 => 
            array (
                'id' => 93,
                'tmdb_id' => 53077,
            'name' => 'Cabbage Soup (Shchi)',
                'category_id' => 4,
                'area_id' => 6,
                'instructions' => 'Add the butter to a large Dutch oven or other heavy-duty pot over medium heat. When the butter has melted, add the onion and sauté until translucent.
Add the cabbage, carrot, and celery. Sauté until the vegetables begin to soften, stirring frequently, about 3 minutes.
Add the bay leaf and vegetable stock and bring to a boil over high heat. Reduce the heat to low and simmer, covered, until the vegetables are crisp-tender, about 15 minutes.
Add the potatoes and bring it back to a boil over high heat. Reduce the heat to low and simmer, covered, until the potatoes are tender, about 10 minutes.
Add the tomatoes (or undrained canned tomatoes) and bring the soup back to a boil over high heat. Reduce the heat to low and simmer, uncovered, for 5 minutes. Season to taste with salt and pepper.
emove and discard the bay leaf from the pot.
Serve topped with fresh sour cream and fresh dill.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/60oc3k1699009846.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=lTjlbqGc_Y8',
                'ingredients' => '[22,53,169,64,85,99,87,66,54,228,189]',
                'measurements' => '[20,50,87,32,32,32,269,161,161,138,138]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            93 => 
            array (
                'id' => 94,
                'tmdb_id' => 52785,
                'name' => 'Dal fry',
                'category_id' => 4,
                'area_id' => 3,
                'instructions' => 'Wash and soak toor dal in approx. 3 cups of water, for at least one hours. Dal will be double in volume after soaking. Drain the water.
Cook dal with 2-1/2 cups water and add salt, turmeric, on medium high heat, until soft in texture (approximately 30 mins) it should be like thick soup.
In a frying pan, heat the ghee. Add cumin seeds, and mustard seeds. After the seeds crack, add bay leaves, green chili, ginger and chili powder. Stir for a few seconds.
Add tomatoes, salt and sugar stir and cook until tomatoes are tender and mushy.
Add cilantro and garam masala cook for about one minute.
Pour the seasoning over dal mix it well and cook for another minute.
Serve with Naan.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wuxrtu1483564410.jpg',
                'tags' => '[48,42,19]',
                'youtube_url' => 'https://www.youtube.com/watch?v=J4D855Q9-jg',
                'ingredients' => '[318,36,21,30,319,249,206,320,99,56,27,321,131,21,23,211]',
                'measurements' => '[27,136,5,273,20,27,17,17,4,110,291,25,17,17,5,273]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            94 => 
            array (
                'id' => 95,
                'tmdb_id' => 52899,
                'name' => 'Dundee cake',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Put the almonds into a small bowl and pour over boiling water to just cover. Leave for 5 mins then drain in a sieve and leave to dry.
Preheat the oven to 180C/160 C fan/Gas Mark 4. Line a deep loose-based 20cm cake tin with baking parchment.
Put the butter in a large bowl and beat well until soft. Add the sugar and beat until light and fluffy. Stir in the orange zest and apricot jam.
Sieve together the flour and baking powder. Add the eggs to the creamed butter and sugar, a little at a time, beating well between each addition. If the mixture starts to curdle, stir in a little flour.
Add the remaining flour and ground almonds and mix well. Mix in the milk and then add the dried fruit and cherries and mix gently together.
Spoon the mixture into the prepared tin and spread level using the back of a spoon. Arrange the whole almonds close together in neat circles on the top of the cake. Bake in the oven for 45 mins.
Lower the oven temperature to 160C/140 C fan/Gas Mark 3 and cook for a further 60–80 minutes. Check the cake after 50 minutes by inserting a wooden or metal skewer into the cake. When it’s done it should have just a few crumbs attached. Check every 10 minutes - it’s important not to overcook this cake so the centre will be a little soft.
When cooked, remove the cake briefly from the oven, put the milk and sugar into a small pan and heat gently until the sugar has dissolved. Brush over the top of the cake and return the cake to the oven for 2-3 mins. Remove and allow the cake to cool in the tin. When quite cold remove from the tin and wrap in foil and keep for at least 2 days before cutting.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wxyvqq1511723401.jpg',
                'tags' => '[49,41,3]',
                'youtube_url' => 'https://www.youtube.com/watch?v=4hEXsfpeMQE',
                'ingredients' => '[114,2,280,202,322,10,20,18,7,16,276,298,16,5]',
                'measurements' => '[121,128,128,197,20,196,5,62,121,25,47,121,117,37]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            95 => 
            array (
                'id' => 96,
                'tmdb_id' => 52907,
                'name' => 'Duck Confit',
                'category_id' => 6,
                'area_id' => 7,
                'instructions' => 'The day before you want to make the dish, scatter half the salt, half the garlic and half of the herbs over the base of a small shallow dish. Lay the duck legs, skin-side up, on top, then scatter over the remaining salt, garlic and herbs. Cover the duck and refrigerate overnight. This can be done up to 2 days ahead.
Pour the wine into a saucepan that will snugly fit the duck legs in a single layer. Brush the salt off the duck legs and place them, skin-side down, in the wine. Cover the pan with a lid and place over a medium heat. As soon as the wine starts to bubble, turn the heat down to the lowest setting and cook for 2 hours, checking occasionally that the liquid is just barely simmering. (If you own a heat diffuser, it would be good to use it here.) After 2 hours, the duck legs should be submerged in their own fat and the meat should feel incredibly tender when prodded. Leave to cool.
The duck legs are now cooked and can be eaten immediately – or you can follow the next step if you like them crisp. If you are preparing ahead, pack the duck legs tightly into a plastic container or jar and pour over the fat, but not the liquid at the bottom of the pan. Cover and leave in the fridge for up to a month, or freeze for up to 3 months. The liquid you are left with makes a tasty gravy, which can be chilled or frozen until needed.
To reheat and crisp up the duck legs, heat oven to 220C/fan 200C/gas 7. Remove the legs from the fat and place them, skin-side down, in an ovenproof frying pan. Roast for 30-40 mins, turning halfway through, until brown and crisp. Serve with the reheated gravy, a crisp salad and some crisp golden ptoatoes.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wvpvsu1511786158.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=MHhLJqghY-o',
                'ingredients' => '[261,99,55,60,323,214]',
                'measurements' => '[245,60,70,245,60,82]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            96 => 
            array (
                'id' => 97,
                'tmdb_id' => 52791,
                'name' => 'Eton Mess',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Purée half the strawberries in a blender. Chop the remaining strawberries, reserving four for decoration.
Whip the double cream until stiff peaks form, then fold in the strawberry purée and crushed meringue. Fold in the chopped strawberries and ginger cordial, if using.
Spoon equal amounts of the mixture into four cold wine glasses. Serve garnished with the remaining strawberries and a sprig of mint.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uuxwvq1483907861.jpg',
                'tags' => '[18,3,14,21,22]',
                'youtube_url' => 'https://www.youtube.com/watch?v=43WgiNq54L8',
                'ingredients' => '[324,43,325,286,112]',
                'measurements' => '[47,106,292,30,125]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            97 => 
            array (
                'id' => 98,
                'tmdb_id' => 52888,
                'name' => 'Eccles Cakes',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'To make the pastry, dice the butter and put it in the freezer to go really hard. Tip flour into the bowl of a food processor with half the butter and pulse to the texture of breadcrumbs. Pour in the lemon juice and 100ml iced water, and pulse to a dough. Tip in the rest of the butter and pulse a few times until the dough is heavily flecked with butter. It is important that you don’t overdo this as the flecks of butter are what makes the pastry flaky.
On a floured surface roll the pastry out to a neat rectangle about 20 x 30cm. Fold the two ends of the pastry into the middle (See picture 1), then fold in half (pic 2). Roll the pastry out again and refold the same way 3 more times resting the pastry for at least 15 mins each time between roll and fold, then leave to rest in the fridge for at least 30 mins before using.
To make the filling, melt the butter in a large saucepan. Take it off the heat and stir in all the other ingredients until completely mixed, then set aside.
To make the cakes, roll the pastry out until it’s just a little thicker than a £1 coin and cut out 8 rounds about 12cm across. Re-roll the trimming if needed. Place a good heaped tablespoon of mixture in the middle of each round, brush the edges of the rounds with water, then gather the pastry around the filling and squeeze it together (pic 3). Flip them over so the smooth top is upwards and pat them into a smooth round. Flatten each round with a rolling pin to an oval until the fruit just starts to poke through, then place on a baking tray. Cut 2 little slits in each Eccles cakes, brush generously with egg white and sprinkle with the sugar (pic 4).
Heat the oven to 220C/200C fan/gas 8. Bake the Eccles cakes for 15-20 mins until just past golden brown and sticky. Leave to cool on a rack and enjoy while still warm or cold with a cup of tea. If you prefer, Eccles cakes also go really well served with a wedge of hard, tangy British cheese such as Lancashire or cheddar.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wtqrqw1511639627.jpg',
                'tags' => '[38,21]',
                'youtube_url' => 'https://www.youtube.com/watch?v=xV0QCJ0GD5w',
                'ingredients' => '[2,10,109,2,299,326,280,14,27,72,109,18,23]',
                'measurements' => '[79,122,282,18,102,113,121,5,5,5,197,293,96]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            98 => 
            array (
                'id' => 99,
                'tmdb_id' => 52895,
                'name' => 'English Breakfast',
                'category_id' => 9,
                'area_id' => 1,
                'instructions' => 'Heat the flat grill plate over a low heat, on top of 2 rings/flames if it fits, and brush sparingly with light olive oil.
Cook the sausages first. Add the sausages to the hot grill plate/the coolest part if there is one and allow to cook slowly for about 15-20 minutes, turning occasionally, until golden. After the first 10 minutes, increase the heat to medium before beginning to cook the other ingredients. If you are struggling for space, completely cook the sausages and keep hot on a plate in the oven.
Snip a few small cuts into the fatty edge of the bacon. Place the bacon straight on to the grill plate and fry for 2-4 minutes each side or until your preferred crispiness is reached. Like the sausages, the cooked bacon can be kept hot on a plate in the oven.
For the mushrooms, brush away any dirt using a pastry brush and trim the stalk level with the mushroom top. Season with salt and pepper and drizzle over a little olive oil. Place stalk-side up on the grill plate and cook for 1-2 minutes before turning and cooking for a further 3-4 minutes. Avoid moving the mushrooms too much while cooking, as this releases the natural juices, making them soggy.
For the tomatoes, cut the tomatoes across the centre/or in half lengthways if using plum tomatoes , and with a small, sharp knife remove the green \'eye\'. Season with salt and pepper and drizzle with a little olive oil. Place cut-side down on the grill plate and cook without moving for 2 minutes. Gently turn over and season again. Cook for a further 2-3 minutes until tender but still holding their shape.
For the black pudding, cut the black pudding into 3-4 slices and remove the skin. Place on the grill plate and cook for 1½-2 minutes each side until slightly crispy.
For \'proper\' fried bread it\'s best to cook it in a separate pan. Ideally, use bread that is a couple of days old. Heat a frying pan to a medium heat and cover the base with oil. Add the bread and cook for 2-3 minutes each side until crispy and golden. If the pan becomes too dry, add a little more oil. For a richer flavour, add a knob of butter after you turn the slice.
For the fried eggs, break the egg straight into the pan with the fried bread and leave for 30 seconds. Add a good knob of butter and lightly splash/baste the egg with the butter when melted. Cook to your preferred stage, season and gently remove with a fish slice.
Once all the ingredients are cooked, serve on warm plates and enjoy straight away with a good squeeze of tomato ketchup or brown sauce.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/utxryw1511721587.jpg',
                'tags' => '[13]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FXjYU2Ensck',
                'ingredients' => '[89,104,45,54,327,18,41]',
                'measurements' => '[4,57,4,4,179,4,179]',
                'created_at' => '2025-04-15 09:39:19',
                'updated_at' => '2025-04-15 09:39:19',
            ),
            99 => 
            array (
                'id' => 100,
                'tmdb_id' => 52944,
                'name' => 'Escovitch Fish',
                'category_id' => 8,
                'area_id' => 9,
                'instructions' => 'Rinse fish; rub with lemon or lime, seasoned with salt and pepper or use your favorite seasoning. I used creole seasoning. Set aside or place in the oven to keep it warm until sauce is ready.

In large skillet heat oil over medium heat, until hot, add the fish, cook each side- for about 5-7 minutes until cooked through and crispy on both sides. Remove fish and set aside. Drain oil and leave about 2-3 tablespoons of oil
Add, bay leave, garlic and ginger, stir-fry for about a minute making sure the garlic does not burn
Then add onion, bell peppers, thyme, scotch bonnet, sugar, all spice-continue stirring for about 2-3 minutes. Add vinegar, mix an adjust salt and pepper according to preference. Let it simmer for about 2 more minutes. 

Discard bay leave, thyme spring and serve over fish with a side of this bammy. You may make the sauce about 2 days in advance.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1520084413.jpg',
                'tags' => '[50,9,22,51]',
                'youtube_url' => 'https://www.youtube.com/watch?v=nF6DOtGE6k8',
                'ingredients' => '[328,135,55,27,60,99,131,329,53,64,23,72,175,330,132,331,102]',
                'measurements' => '[294,132,295,17,241,32,188,188,86,140,117,17,5,32,32,296,95]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            100 => 
            array (
                'id' => 101,
                'tmdb_id' => 52955,
                'name' => 'Egg Drop Soup',
                'category_id' => 4,
                'area_id' => 10,
                'instructions' => 'In a wok add chicken broth and wait for it to boil.
Next add salt, sugar, white pepper, sesame seed oil.
When the chicken broth is boiling add the vegetables to the wok.
To thicken the sauce, whisk together 1 Tablespoon of cornstarch and 2 Tablespoon of water in a bowl and slowly add to your soup until it\'s the right thickness.
Next add 1 egg slightly beaten with a knife or fork and add it to the soup slowly and stir for 8 seconds
Serve the soup in a bowl and add the green onions on top.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529446137.jpg',
                'tags' => '[32,2,11]',
                'youtube_url' => 'https://www.youtube.com/watch?v=9XpzHm9QpZg',
                'ingredients' => '[218,21,23,102,136,332,45,134,36,176]',
                'measurements' => '[186,273,273,95,5,232,232,117,25,163]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            101 => 
            array (
                'id' => 102,
                'tmdb_id' => 53031,
                'name' => 'Egyptian Fatteh',
                'category_id' => 3,
                'area_id' => 25,
                'instructions' => 'To prepare bread for bottom of dish: Take pita bread and rip into bite size pieces. In a frying pan, add about a 1/4 stick of butter, add bread pieces and fry until golden brown and crisp. Put these pieces in a glass baking dish, preferably a square sized dish. Set aside.
Then add to same pan, a little more butter, salt, approximately 2 cloves of crushed fresh garlic, and a teaspoon or so of cumin stir around a bit until you can smell aroma, then add fried bread pieces to this mixture, stir to coat bread and put back into glass baking dish. Set aside.
To prepare meat: put some butter in a pot, stir fry meat until brown, add 1 onion quartered, salt & pepper, 1 cube of chicken bouillon and water to cover meat. Bring to a boil, turn down to simmer, cover and cook until tender, approximately 2 hours. After meat has cooled, take out chunks of meat and put in a bowl, set aside. Reserve soup from the meat separately.
To prepare the rice: Put some butter into a pot, add shareya (fideo noodles) like a handful or so, keep stirring until golden brown, not too dark, but very golden. Then add two cups of rice, stir a little bit until some of the rice turns an opaque white. Add 2-1/4 cups of water and salt to taste. Bring to a boil, cover and turn down to simmer, cook until tender. Test the rice tenderness after about 35 minutes.
Now take some of the soup from meat and add to the top of the bread pieces in baking dish to saturate.Add cooked rice on top of bread pieces. Slowly spoon remainder of soup onto rice, looking at glass dish sides to see level of soup, should reach just to top of rice, don’t worry, this doesn’t have to be exact. Now you’re ready to make the sauce and fry the meat to put on top.
To prepare red sauce: In a pan, add a little oil or butter, crushed tomato, a half teaspoon of tomato paste, salt & pepper, 2 cloves of fresh crushed garlic and cumin. Add also approximately 3 tablespoons of vinegar, stir this until you smell aroma and it is a bit smooth. It should be a bit thick, not watery, but if too thick you can add a bit of water. Spread with a wooden spoon atop the rice to cover.
To fry meat: In a pan add a bit of butter or oil, the meat, just a touch of tomato paste, about a tablespoon of fresh crushed garlic, salt & pepper, a teaspoon of cumin. Cook until meat is golden fried.
Spoon this atop the rice and serve. Enjoy!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rlwcc51598734603.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=WLuOHkDE4A4',
                'ingredients' => '[67,53,187,54,28,123,155,139,2,47,333,31,164,21,102]',
                'measurements' => '[173,32,32,4,60,117,61,163,163,61,32,117,20,152,152]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            102 => 
            array (
                'id' => 103,
                'tmdb_id' => 53073,
                'name' => 'Eggplant Adobo',
                'category_id' => 4,
                'area_id' => 17,
            'instructions' => '1.	Slice 1 lb. small Japanese or Italian eggplant (about 3) into quarters lengthwise, then cut crosswise into 2"-wide pieces. Place in a medium bowl. Add 1 Tbsp. sugar, 1 tsp. Diamond Crystal or ½ tsp. Morton kosher salt, and ½ tsp. freshly ground black pepper. Toss to evenly coat eggplant and let sit at room temperature at least 20 minutes and up to 2 hours.
2.	Peel and thinly slice 8 garlic cloves. Add 3 Tbsp. vegetable oil and half of garlic to a medium Dutch oven or other heavy pot. Cook over medium-high heat, stirring constantly with a wooden spoon, until light golden and crisp, about 5 minutes. Using a slotted spoon, transfer garlic chips to a plate; season lightly with salt.
3. Place 4 oz. ground pork in same pot and break up into small pieces with wooden spoon. Season with ¼ tsp. Diamond Crystal or Morton kosher salt and cook, undisturbed, until deeply browned underneath, about 5 minutes. Using a slotted spoon, transfer to another plate, leaving fat behind in the pot.
4. Place eggplant on a clean kitchen towel and blot away any moisture the salt has drawn out.
5. Working in batches and adding more oil if needed, cook eggplant in the same pot until lightly browned, about 3 minutes per side. Transfer to a plate with pork.
6. Pour 1½ cups of water into the pot and scrape up browned bits from the bottom with a wooden spoon. Add remaining garlic, 3 Tbsp. coconut vinegar or unseasoned rice vinegar, 2 Tbsp. soy sauce, 2 bay leaves, 1 tsp. freshly ground black pepper, and remaining 1 Tbsp. sugar. Bring to a simmer, then return pork and eggplant to pot. Reduce heat to medium-low, partially cover, and simmer until eggplant is tender and silky and sauce is reduced by half, 20–25 minutes. Taste and season with more salt and pepper and add a little more sugar if needed.
7. Top with garlic chips and serve with cooked white rice.
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/y7h0lq1683208991.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=pKXACYjwMns',
                'ingredients' => '[316,23,21,102,55,47,334,335,133,99]',
                'measurements' => '[155,25,5,5,139,20,297,20,25,4]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            103 => 
            array (
                'id' => 104,
                'tmdb_id' => 52802,
                'name' => 'Fish pie',
                'category_id' => 8,
                'area_id' => 1,
                'instructions' => '01.Put the potatoes in a large pan of cold salted water and bring to the boil. Lower the heat, cover, then simmer gently for 15 minutes until tender. Drain, then return to the pan over a low heat for 30 seconds to drive off any excess water. Mash with 1 tbsp olive oil, then season.
02.Meanwhile put the milk in a large sauté pan, add the fish and bring to the boil. Remove from the heat, cover and stand for 3 minutes. Remove the fish (reserving the milk) and pat dry with kitchen paper, then gently flake into an ovenproof dish, discarding the skin and any bones.
03.Heat the remaining oil in a pan, stir in the flour and cook for 30 seconds. Gradually stir in 200-250ml of the reserved milk (discard the rest). Grate in nutmeg, season, then bubble until thick. Stir in the cream.
04.Preheat the oven to 190°C/fan170°C/gas 5. Grate the artichokes and add to the dish with the leek, prawns and herbs. Stir the lemon zest and juice into the sauce, then pour over. Mix gently with a wooden spoon.
05.Spoon the mash onto the fish mixture, then use a fork to make peaks, which will crisp and brown as it cooks. Sprinkle over the cheese, then bake for 35-40 minutes until golden and bubbling. Serve with wilted greens.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ysxwuq1487323065.jpg',
                'tags' => '[40,16,13,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=2sX4fCgg-UI',
                'ingredients' => '[336,47,337,338,10,44,43,339,86,340,83,189,109,341,109]',
                'measurements' => '[109,75,240,286,30,298,73,102,107,299,300,245,277,301,146]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            104 => 
            array (
                'id' => 105,
                'tmdb_id' => 52815,
                'name' => 'French Lentils With Garlic and Thyme',
                'category_id' => 6,
                'area_id' => 7,
                'instructions' => 'Place a large saucepan over medium heat and add oil. When hot, add chopped vegetables and sauté until softened, 5 to 10 minutes.
Add 6 cups water, lentils, thyme, bay leaves and salt. Bring to a boil, then reduce to a fast simmer.
Simmer lentils until they are tender and have absorbed most of the water, 20 to 25 minutes. If necessary, drain any excess water after lentils have cooked. Serve immediately, or allow them to cool and reheat later.
For a fuller taste, use some chicken stock and reduce the water by the same amount.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vwwspt1487394060.jpg',
                'tags' => '[52]',
                'youtube_url' => 'https://www.youtube.com/watch?v=CrlTS1mJQMA',
                'ingredients' => '[47,53,55,64,342,60,99,21,85]',
                'measurements' => '[204,32,154,32,302,206,57,226,248]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            105 => 
            array (
                'id' => 106,
                'tmdb_id' => 52835,
                'name' => 'Fettucine alfredo',
                'category_id' => 11,
                'area_id' => 11,
                'instructions' => 'In a medium saucepan, stir the clotted cream, butter and cornflour over a low-ish heat and bring to a low simmer. Turn off the heat and keep warm.
Meanwhile, put the cheese and nutmeg in a small bowl and add a good grinding of black pepper, then stir everything together (don’t add any salt at this stage).
Put the pasta in another pan with 2 tsp salt, pour over some boiling water and cook following pack instructions (usually 3-4 mins). When cooked, scoop some of the cooking water into a heatproof jug or mug and drain the pasta, but not too thoroughly.
Add the pasta to the pan with the clotted cream mixture, then sprinkle over the cheese and gently fold everything together over a low heat using a rubber spatula. When combined, splash in 3 tbsp of the cooking water. At first, the pasta will look wet and sloppy: keep stirring until the water is absorbed and the sauce is glossy. Check the seasoning before transferring to heated bowls. Sprinkle over some chives or parsley, then serve immediately.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uquqtu1511178042.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FLEnwZvGzOE',
                'ingredients' => '[343,2,106,197,44,344,83]',
                'measurements' => '[303,18,5,121,114,79,159]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            106 => 
            array (
                'id' => 107,
                'tmdb_id' => 52896,
                'name' => 'Full English Breakfast',
                'category_id' => 9,
                'area_id' => 1,
                'instructions' => 'Heat the flat grill plate over a low heat, on top of 2 rings/flames if it fits, and brush sparingly with light olive oil.
Cook the sausages first. Add the sausages to the hot grill plate/the coolest part if there is one and allow to cook slowly for about 15-20 minutes, turning occasionally, until golden. After the first 10 minutes, increase the heat to medium before beginning to cook the other ingredients. If you are struggling for space, completely cook the sausages and keep hot on a plate in the oven.
Snip a few small cuts into the fatty edge of the bacon. Place the bacon straight on to the grill plate and fry for 2-4 minutes each side or until your preferred crispiness is reached. Like the sausages, the cooked bacon can be kept hot on a plate in the oven.
For the mushrooms, brush away any dirt using a pastry brush and trim the stalk level with the mushroom top. Season with salt and pepper and drizzle over a little olive oil. Place stalk-side up on the grill plate and cook for 1-2 minutes before turning and cooking for a further 3-4 minutes. Avoid moving the mushrooms too much while cooking, as this releases the natural juices, making them soggy.
For the tomatoes, cut the tomatoes across the centre/or in half lengthways if using plum tomatoes , and with a small, sharp knife remove the green \'eye\'. Season with salt and pepper and drizzle with a little olive oil. Place cut-side down on the grill plate and cook without moving for 2 minutes. Gently turn over and season again. Cook for a further 2-3 minutes until tender but still holding their shape.
For the black pudding, cut the black pudding into 3-4 slices and remove the skin. Place on the grill plate and cook for 1½-2 minutes each side until slightly crispy.
For \'proper\' fried bread it\'s best to cook it in a separate pan. Ideally, use bread that is a couple of days old. Heat a frying pan to a medium heat and cover the base with oil. Add the bread and cook for 2-3 minutes each side until crispy and golden. If the pan becomes too dry, add a little more oil. For a richer flavour, add a knob of butter after you turn the slice.
For the fried eggs, break the egg straight into the pan with the fried bread and leave for 30 seconds. Add a good knob of butter and lightly splash/baste the egg with the butter when melted. Cook to your preferred stage, season and gently remove with a fish slice.
Once all the ingredients are cooked, serve on warm plates and enjoy straight away with a good squeeze of tomato ketchup or brown sauce.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sqrtwu1511721265.jpg',
                'tags' => '[53,54,28,11,13,43]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FXjYU2Ensck',
                'ingredients' => '[89,104,45,54,327,18,41,345]',
                'measurements' => '[60,60,60,57,123,4,179,121]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            107 => 
            array (
                'id' => 108,
                'tmdb_id' => 52903,
                'name' => 'French Onion Soup',
                'category_id' => 7,
                'area_id' => 7,
                'instructions' => 'Melt the butter with the oil in a large heavy-based pan. Add the onions and fry with the lid on for 10 mins until soft. Sprinkle in the sugar and cook for 20 mins more, stirring frequently, until caramelised. The onions should be really golden, full of flavour and soft when pinched between your fingers. Take care towards the end to ensure that they don’t burn.
Add the garlic for the final few mins of the onions’ cooking time, then sprinkle in the flour and stir well. Increase the heat and keep stirring as you gradually add the wine, followed by the hot stock. Cover and simmer for 15-20 mins.
To serve, turn on the grill, and toast the bread. Ladle the soup into heatproof bowls. Put a slice or two of toast on top of the bowls of soup, and pile on the cheese. Grill until melted. Alternatively, you can complete the toasts under the grill, then serve them on top.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xvrrux1511783685.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=-DLDMQucqDI',
                'ingredients' => '[2,47,53,23,28,10,284,63,41,341]',
                'measurements' => '[113,117,304,5,305,25,288,306,305,67]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            108 => 
            array (
                'id' => 109,
                'tmdb_id' => 52906,
                'name' => 'Flamiche',
                'category_id' => 4,
                'area_id' => 7,
                'instructions' => 'For the pastry, sift the flour and salt into the bowl of a food processor, add the butter and lard, then whizz together briefly until the mixture looks like fine breadcrumbs. Tip the mixture into a bowl, then stir in the cheese and enough of the water for the mixture to come together. Tip out onto a lightly floured surface and knead briefly until smooth. Roll out thinly and line a 23cm x 4cm loose-?bottomed fluted flan tin. Prick the base with a fork. Chill for 20 minutes.
02.Melt the 75g butter in a saucepan over a low heat, then add the leeks and the salt. Cover and cook for ?10 minutes until soft. Uncover the pan, increase the heat and cook ?for 2 minutes, stirring occasionally, until the liquid has evaporated. Spoon onto a plate and leave to cool.
03.Preheat the oven to 200°C/fan180°C/gas 6. Line the pastry case with baking paper and baking beans or rice and blind bake for 15-20 minutes until the edges are biscuit-coloured. Remove the paper and beans/rice and return the case to the oven for 7-10 minutes until the base is crisp and lightly golden. Remove and set aside. Reduce the oven temperature to 190°C/fan170°C/gas 5.
04.Put the crème fraîche into a bowl with the whole egg, egg yolks and nutmeg. Lightly beat together, then season. Stir in the leeks. Spoon ?the mixture into the tart case and bake for 35-40 minutes until set ?and lightly golden. Remove from ?the oven and leave for 10 minutes. Take out of the tin and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wssvvs1511785879.jpg',
                'tags' => '[1]',
                'youtube_url' => 'https://www.youtube.com/watch?v=vT0q5c880Rg',
                'ingredients' => '[2,86,21,82,137,51,44,10,21,2,346,221,36]',
                'measurements' => '[116,69,33,118,32,57,11,196,33,8,8,113,25]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            109 => 
            array (
                'id' => 110,
                'tmdb_id' => 52915,
                'name' => 'French Omelette',
                'category_id' => 6,
                'area_id' => 7,
            'instructions' => 'Get everything ready. Warm a 20cm (measured across the top) non-stick frying pan on a medium heat. Crack the eggs into a bowl and beat them with a fork so they break up and mix, but not as completely as you would for scrambled egg. With the heat on medium-hot, drop one knob of butter into the pan. It should bubble and sizzle, but not brown. Season the eggs with the Parmesan and a little salt and pepper, and pour into the pan.
Let the eggs bubble slightly for a couple of seconds, then take a wooden fork or spatula and gently draw the mixture in from the sides of the pan a few times, so it gathers in folds in the centre. Leave for a few seconds, then stir again to lightly combine uncooked egg with cooked. Leave briefly again, and when partly cooked, stir a bit faster, stopping while there’s some barely cooked egg left. With the pan flat on the heat, shake it back and forth a few times to settle the mixture. It should slide easily in the pan and look soft and moist on top. A quick burst of heat will brown the underside.
Grip the handle underneath. Tilt the pan down away from you and let the omelette fall to the edge. Fold the side nearest to you over by a third with your fork, and keep it rolling over, so the omelette tips onto a plate – or fold it in half, if that’s easier. For a neat finish, cover the omelette with a piece of kitchen paper and plump it up a bit with your fingers. Rub the other knob of butter over to glaze. Serve immediately.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yvpuuy1511797244.jpg',
                'tags' => '[55]',
                'youtube_url' => 'https://www.youtube.com/watch?v=qXPhVYpQLPA',
                'ingredients' => '[18,2,347,348,83,349,341]',
                'measurements' => '[57,307,5,164,110,110,182]',
                'created_at' => '2025-04-15 09:39:20',
                'updated_at' => '2025-04-15 09:39:20',
            ),
            110 => 
            array (
                'id' => 111,
                'tmdb_id' => 52918,
                'name' => 'Fish Stew with Rouille',
                'category_id' => 8,
                'area_id' => 7,
                'instructions' => 'Twist the heads from the prawns, then peel away the legs and shells, but leave the tails intact. Devein each prawn. Fry the shells in 1 tbsp oil for 5 mins, until dark pink and golden in patches. Add the wine, boil down by two thirds, then pour in the stock. Strain into a jug, discarding the shells.
Heat the rest of the oil in a deep frying pan or casserole. Add the fennel, onion and garlic, season, then cover and gently cook for 10 mins until softened. Meanwhile, peel the potato and cut into 2cm-ish chunks. Put into a pan of cold water, bring to the boil and cook for 5 mins until almost tender. Drain in a colander.
Peel a strip of zest from the orange. Put the zest, star anise, bay and ½ tsp harissa into the pan. Fry gently, uncovered, for 5-10 mins, until the vegetables are soft, sweet and golden.
Stir in the tomato purée, cook for 2 mins, then add the tomatoes and stock. Simmer for 10 mins until the sauce thickens slightly. Season to taste. The sauce can be made ahead, then reheated later in the day. Meantime, scrub the mussels or clams and pull away any stringy beards. Any that are open should be tapped sharply on the worktop – if they don’t close after a few seconds, discard them.
Reheat the sauce if necessary, then stir the potato, chunks of fish and prawns very gently into the stew. Bring back to the boil, then cover and gently simmer for 3 mins. Scatter the mussels or clams over the stew, then cover and cook for 2 mins more or until the shells have opened wide. Discard any that remain closed. The chunks of fish should flake easily and the prawns should be pink through. Scatter with the thyme leaves.
To make the quick rouille, stir the rest of the harissa through the mayonnaise. Serve the stew in bowls, topped with spoonfuls of rouille, which will melt into the sauce and enrich it. Have some good bread ready, as you’ll definitely want to mop up the juices.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vptqpw1511798500.jpg',
                'tags' => '[40,50,56]',
                'youtube_url' => 'https://www.youtube.com/watch?v=fp9Lqx2EUco',
                'ingredients' => '[340,47,284,350,33,53,55,66,202,179,99,255,123,249,351,223,60,41]',
                'measurements' => '[308,20,103,13,214,214,267,50,32,32,32,162,25,42,245,102,4,12]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            111 => 
            array (
                'id' => 112,
                'tmdb_id' => 52919,
                'name' => 'Fennel Dauphinoise',
                'category_id' => 7,
                'area_id' => 7,
                'instructions' => 'Heat oven to 180C/160C fan/gas 4. Put potatoes, fennel, and garlic in a medium non-stick pan. Pour in milk and double cream, season well and simmer gently, covered, for 10 mins, stirring halfway through, until potatoes are just tender.
Divide the mixture between 2 small (about 150ml) buttered ramekins and scatter with Parmesan. Bake for 40 mins until the potatoes are golden and tender when pierced with a knife. Snip the reserved fennel fronds over before serving.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ytttsv1511798734.jpg',
                'tags' => '[16,20]',
                'youtube_url' => 'https://www.youtube.com/watch?v=tXBzZm2kkh8',
                'ingredients' => '[66,33,55,16,43,2,197]',
                'measurements' => '[196,284,222,309,82,310,12]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            112 => 
            array (
                'id' => 113,
                'tmdb_id' => 52957,
                'name' => 'Fruit and Cream Cheese Breakfast Pastries',
                'category_id' => 9,
                'area_id' => 4,
            'instructions' => 'Preheat oven to 400ºF (200ºC), and prepare two cookie sheets with parchment paper. In a bowl, mix cream cheese, sugar, and vanilla until fully combined. Lightly flour the surface and roll out puff pastry on top to flatten. Cut each sheet of puff pastry into 9 equal squares. On the top right and bottom left of the pastry, cut an L shape approximately ½ inch (1 cm) from the edge.
NOTE: This L shape should reach all the way down and across the square, however both L shapes should not meet at the ends. Your pastry should look like a picture frame with two corners still intact.
Take the upper right corner and fold down towards the inner bottom corner. You will now have a diamond shape.
Place 1 to 2 teaspoons of the cream cheese filling in the middle, then place berries on top.
Repeat with the remaining pastry squares and place them onto the parchment covered baking sheet.
Bake for 15-20 minutes or until pastry is golden brown and puffed.
Enjoy!
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1543774956.jpg',
                'tags' => '[13,17]',
                'youtube_url' => '',
                'ingredients' => '[262,23,94,19,50,324,96,13]',
                'measurements' => '[311,312,206,4]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            113 => 
            array (
                'id' => 114,
                'tmdb_id' => 52996,
                'name' => 'French Onion Chicken with Roasted Carrots & Mashed Potatoes',
                'category_id' => 2,
                'area_id' => 4,
                'instructions' => '1

Preheat oven to 425 degrees. Wash and dry all produce. Trim, peel, and cut carrots on a diagonal into ¼-inch-thick pieces. Dice potatoes into ½-inch pieces. Halve, peel, and thinly slice onion.

2

Toss carrots on a baking sheet with a drizzle of oil, salt, and pepper. Roast until browned and tender, 15-20 minutes.

3

Meanwhile, place potatoes in a medium pot with enough salted water to cover by 2 inches. Bring to a boil and cook until tender, 12-15 minutes. Drain and return potatoes to pot; cover to keep warm.

4

While potatoes cook, heat a drizzle of oil in a large pan over medium-high heat. Add onion and cook, stirring occasionally, until lightly browned and softened, 8-10 minutes. Sprinkle with 1 tsp sugar (2 tsp for 4 servings). Stir in stock concentrate and 2 TBSP water (¼ cup for 4); season with salt and pepper. Cook until jammy, 2-3 minutes more. Turn off heat; transfer to a small bowl. Wash out pan.

5

Pat chicken dry with paper towels; season all over with salt and pepper. Heat a drizzle of oil in pan used for onion over medium-high heat. Add chicken and cook until browned and cooked through, 5-6 minutes per side. In the last 1-2 minutes of cooking, top with caramelized onion and cheese. Cover pan until cheese melts. (If your pan doesn’t have a lid, cover with a baking sheet!)

6

Heat pot with drained potatoes over low heat; mash with sour cream, 2 TBSP butter (4 TBSP for 4 servings), salt, pepper, and a splash of water (or milk, for extra richness) until smooth. Divide chicken, roasted carrots, and mashed potatoes between plates.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/b5ft861583188991.jpg',
                'tags' => '[]',
                'youtube_url' => '',
                'ingredients' => '[194,64,66,53,63,315,228,2,23,135,21,102]',
                'measurements' => '[4,313,174,32,32,166,75]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            114 => 
            array (
                'id' => 115,
                'tmdb_id' => 53025,
                'name' => 'Ful Medames',
                'category_id' => 4,
                'area_id' => 25,
                'instructions' => 'As the cooking time varies depending on the quality and age of the beans, it is good to cook them in advance and to reheat them when you are ready to serve. Cook the drained beans in a fresh portion of unsalted water in a large saucepan with the lid on until tender, adding water to keep them covered, and salt when the beans have softened. They take 2–2 1/2 hours of gentle simmering. When the beans are soft, let the liquid reduce. It is usual to take out a ladle or two of the beans and to mash them with some of the cooking liquid, then stir this back into the beans. This is to thicken the sauce.
Serve the beans in soup bowls sprinkled with chopped parsley and accompanied by Arab bread.
Pass round the dressing ingredients for everyone to help themselves: a bottle of extra-virgin olive oil, the quartered lemons, salt and pepper, a little saucer with the crushed garlic, one with chili-pepper flakes, and one with ground cumin.
The beans are eaten gently crushed with the fork, so that they absorb the dressing.
Optional Garnishes
Peel hard-boiled eggs—1 per person—to cut up in the bowl with the beans.
Top the beans with a chopped cucumber-and-tomato salad and thinly sliced mild onions or scallions. Otherwise, pass round a good bunch of scallions and quartered tomatoes and cucumbers cut into sticks.
Serve with tahina cream sauce (page 65) or salad (page 67), with pickles and sliced onions soaked in vinegar for 30 minutes.
Another way of serving ful medames is smothered in a garlicky tomato sauce (see page 464).
In Syria and Lebanon, they eat ful medames with yogurt or feta cheese, olives, and small cucumbers.
Variations
A traditional way of thickening the sauce is to throw a handful of red lentils (1/4 cup) into the water at the start of the cooking.
In Iraq, large brown beans are used instead of the small Egyptian ones, in a dish called badkila, which is also sold for breakfast in the street.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/lvn2d51598732465.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ixpCabILuxw',
                'ingredients' => '[352,83,47,147,28,31]',
                'measurements' => '[61,232,44,57,60,149]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            115 => 
            array (
                'id' => 116,
                'tmdb_id' => 53030,
                'name' => 'Feteer Meshaltet',
                'category_id' => 7,
                'area_id' => 25,
                'instructions' => 'Mix the flour and salt then pour one cup of water and start kneading.
If you feel the dough is still not coming together or too dry, gradually add the remaining water until you get a dough that is very elastic so that when you pull it and it won’t be torn.
Let the dough rest for just 10 minutes then divide the dough into 6-8 balls depending on the size you want for your feteer.
Warm up the butter/ghee or oil you are using and pour into a deep bowl.
Immerse the dough balls into the warm butter. Let it rest for 15 to 20 minutes.
Preheat oven to 550F.
Stretch the first ball with your hands on a clean countertop. Stretch it as thin as you can, the goal here is to see your countertop through the dough.
Fold the dough over itself to form a square brushing in between folds with the butter mixture.
Set aside and start making the next ball.
Stretch the second one thin as we have done for the first ball.
Place the previous one on the middle seam side down. Fold the outer one over brushing with more butter mixture as you fold. Set aside.
Keep doing this for the third and fourth balls. Now we have one ready, place on a 10 inch baking/pie dish seam side down and brush the top with more butter.
Repeat for the remaining 4 balls to make a second one. With your hands lightly press the folded feteer to spread it on the baking dish.
Place in preheated oven for 10 minutes when the feteer starts puffing turn on the broiler to brown the top.
When it is done add little butter on top and cover so it won’t get dry.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/9f4z6v1598734293.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=-mW1unsVhFU',
                'ingredients' => '[19,36,21,22,47]',
                'measurements' => '[167,314,273,27,163]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            116 => 
            array (
                'id' => 117,
                'tmdb_id' => 53043,
                'name' => 'Fish fofos',
                'category_id' => 8,
                'area_id' => 26,
                'instructions' => 'STEP 1

Put the fish into a lidded pan and pour over enough water to cover. Bring to a simmer and gently poach for 10 minutes over a low heat with the lid on. Drain and flake the fish.

STEP 2

Put the fish, potato, green chilli, coriander, cumin, black pepper, garlic and ginger in a large bowl. Season, add the rice flour, mix well and break in 1 egg. Stir the mixture and divide into 15, then form into small logs. Break the remaining eggs into a bowl and whisk lightly. Put the breadcrumbs into another bowl. Dip each fofo in the beaten egg followed by the breadcrumb mixture. Chill for 20 minutes.

STEP 3

Heat 1cm of oil in a large frying pan over a medium heat. Fry the fofos in batches for 2 minutes on each side, turning gently to get an even golden brown colour all over. Drain on kitchen paper and repeat with the remaining fofos.

STEP 4

For the onion salad, mix together the onion, coriander and lemon juice with a pinch of salt. Serve with the fofos and mango chutney.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/a15wsa1614349126.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=YXUZHK2PrV8',
                'ingredients' => '[353,66,56,32,206,102,55,27,19,18,150,135]',
                'measurements' => '[115,9,140,20,5,17,176,315,25,57,116,137]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            117 => 
            array (
                'id' => 118,
                'tmdb_id' => 53061,
                'name' => 'Fresh sardines',
                'category_id' => 7,
                'area_id' => 16,
                'instructions' => 'Wash the fish under the cold tap. Roll in the flour and deep fry in oil until crispy. Lay on kitchen towel to get rid of the excess oil and serve hot or cold with a slice of lemon.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/nv5lf31628771380.jpg',
                'tags' => '[57]',
                'youtube_url' => 'https://www.youtube.com/watch?v=DDaZoXP1Mdc',
                'ingredients' => '[354,135,19,21]',
                'measurements' => '[47,44,112,44]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            118 => 
            array (
                'id' => 119,
                'tmdb_id' => 53064,
                'name' => 'Fettuccine Alfredo',
                'category_id' => 11,
                'area_id' => 11,
            'instructions' => 'Cook pasta according to package instructions in a large pot of boiling water and salt. Add heavy cream and butter to a large skillet over medium heat until the cream bubbles and the butter melts. Whisk in parmesan and add seasoning (salt and black pepper). Let the sauce thicken slightly and then add the pasta and toss until coated in sauce. Garnish with parsley, and it\'s ready.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/0jv5gx1661040802.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=LPPcNPdq_j4',
                'ingredients' => '[344,215,2,347,83,182]',
                'measurements' => '[155,132,132,132,75]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            119 => 
            array (
                'id' => 120,
                'tmdb_id' => 53079,
            'name' => 'Fish Soup (Ukha)',
                'category_id' => 8,
                'area_id' => 6,
                'instructions' => 'In a medium pot, heat the olive oil over medium-high heat. Add the onions and cook, stirring occasionally until the onions start to caramelize. Add the carrots and cook until the carrots start to soften, about 4 more minutes.
Add the stock, water, potatoes, bay leaves, and black peppercorns. Season with salt and bring to a boil. Reduce heat, cover and cook for 10 minutes. Add the millet and cook for 15 more minutes until millet and potatoes are cooked.
Gently add the fish cubes. Stir and bring the soup to a simmer. The fish will cook through very fast, so make sure to not overcook them. They are done when the flesh is opaque and flakes easily.
Garnish the soup with chopped fresh dill or parsley before serving.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/7n8su21699013057.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=cS3Yn-y5uVg',
                'ingredients' => '[47,53,64,350,36,66,99,355,144]',
                'measurements' => '[25,86,94,186,186,147,57,32,32]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            120 => 
            array (
                'id' => 121,
                'tmdb_id' => 52764,
                'name' => 'Garides Saganaki',
                'category_id' => 8,
                'area_id' => 23,
                'instructions' => 'Place the prawns in a pot and add enough water to cover. Boil for 5 minutes. Drain, reserving the liquid, and set aside.
Heat 2 tablespoons of oil in a saucepan. Add the onion; cook and stir until soft. Mix in the parsley, wine, tomatoes, garlic and remaining olive oil. Simmer, stirring occasionally, for about 30 minutes, or until the sauce is thickened.
While the sauce is simmering, the prawns should become cool enough to handle. First remove the legs by pinching them, and then pull off the shells, leaving the head and tail on.
When the sauce has thickened, stir in the prawns. Bring to a simmer again if the sauce has cooled with the prawns, and cook for about 5 minutes. Add the feta and remove from the heat. Let stand until the cheese starts to melt. Serve warm with slices of crusty bread.
Though completely untraditional, you can add a few tablespoons of stock or passata to this recipe to make a delicious pasta sauce. Toss with pasta after adding the feta, and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wuvryu1468232995.jpg',
                'tags' => '[50,56]',
                'youtube_url' => 'https://www.youtube.com/watch?v=uO0ejc85zSE',
                'ingredients' => '[356,47,357,358,214,249,140,359]',
                'measurements' => '[47,204,32,95,288,316,210,317]',
                'created_at' => '2025-04-15 09:39:21',
                'updated_at' => '2025-04-15 09:39:21',
            ),
            121 => 
            array (
                'id' => 122,
                'tmdb_id' => 52829,
                'name' => 'Grilled Mac and Cheese Sandwich',
                'category_id' => 11,
                'area_id' => 4,
                'instructions' => 'Make the mac and cheese

1. Bring a medium saucepan of generously salted water (you want it to taste like seawater) to a boil. Add the pasta and cook, stirring occasionally, until al dente, 8 to 10 minutes, or according to the package directions. The pasta should be tender but still chewy.
2. While the pasta is cooking, in a small bowl, whisk together the flour, mustard powder, garlic powder, salt, black pepper, and cayenne pepper.
3. Drain the pasta in a colander. Place the empty pasta pan (no need to wash it) over low heat and add the butter. When the butter has melted, whisk in the flour mixture and continue to cook, whisking frequently, until the mixture is beginning to brown and has a pleasant, nutty aroma, about 1 minute. Watch carefully so it does not scorch on the bottom of the pan.
4. Slowly whisk the milk and cream into the flour mixture until everything is really well combined. Cook, whisking constantly, until the sauce is heated through and just begins to thicken, about 2 minutes. Remove from the heat. Gradually add the cheese while stirring constantly with a wooden spoon or silicone spatula and keep stirring until the cheese has melted into the sauce. Then stir in the drained cooked pasta.
5. Line a 9-by-13-inch (23-by-33-centimeter) rimmed baking sheet with parchment paper or aluminum foil. Coat the paper or foil with nonstick cooking spray or slick it with butter. Pour the warm mac and cheese onto the prepared baking sheet and spread it evenly with a spatula. Coat another piece of parchment paper with cooking spray or butter and place it, oiled or buttered side down, directly on the surface of the mac and cheese. Refrigerate until cool and firm, about 1 hour.

Make the grilled cheese
6. Heat a large cast-iron or nonstick skillet over medium-low heat.
7. In a small bowl, stir together the 4 tablespoons (55 grams) butter and garlic powder until well blended.
8. Remove the mac and cheese from the refrigerator and peel off the top layer of parchment paper. Carefully cut into 8 equal pieces. Each piece will make 1 grilled mac and cheese sandwich. (You can stash each individual portion in a double layer of resealable plastic bags and refrigerate for up to 3 days or freeze it for up to 1 month.)
9. Spread 3/4 teaspoon garlic butter on one side of each bread slice. Place half of the slices, buttered-side down, on a clean cutting board. Top each with one slice of Cheddar, then 1 piece of the mac and cheese. (Transfer from the baking sheet by scooting your hand or a spatula under each piece of mac and cheese and then flipping it over onto a sandwich.) Place 1 slice of Jack on top of each. Finish with the remaining bread slices, buttered-side up.
10. Using a wide spatula, place as many sandwiches in the pan as will fit without crowding it. Cover and cook until the bottoms are nicely browned, about 4 minutes. Turn and cook until the second sides are browned, the cheese is melted, and the mac and cheese is heated through, about 4 minutes more.
11. Repeat with the remaining ingredients. Cut the sandwiches in half, if desired, and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xutquv1505330523.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=PYq31xLj-DY',
                'ingredients' => '[217,10,253,166,360,182,29,2,252,215,361,2,166,41,221,362,2]',
                'measurements' => '[318,232,272,210,210,210,168,319,320,321,322,323,206,324,325,64,323]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            122 => 
            array (
                'id' => 123,
                'tmdb_id' => 52951,
                'name' => 'General Tsos Chicken',
                'category_id' => 2,
                'area_id' => 10,
                'instructions' => 'DIRECTIONS:
STEP 1 - SAUCE
In a bowl, add 2 Cups of water, 2 Tablespoon soy sauce, 2 Tablespoon white vinegar, sherry cooking wine, 1/4 Teaspoon white pepper, minced ginger, minced garlic, hot pepper, ketchup, hoisin sauce, and sugar.
Mix together well and set aside.
STEP 2 - MARINATING THE CHICKEN
In a bowl, add the chicken, 1 pinch of salt, 1 pinch of white pepper, 2 egg whites, and 3 Tablespoon of corn starch
STEP 3 - DEEP FRY THE CHICKEN
Deep fry the chicken at 350 degrees for 3-4 minutes or until it is golden brown and loosen up the chicken so that they don\'t stick together.
Set the chicken aside.
STEP 4 - STIR FRY
Add the sauce to the wok and then the broccoli and wait until it is boiling.
To thicken the sauce, whisk together 2 Tablespoon of cornstarch and 4 Tablespoon of water in a bowl and slowly add to your stir-fry until it\'s the right thickness.
Next add in the chicken and stir-fry for a minute and serve on a plate',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529444113.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=wWGwz0iBmvU',
                'ingredients' => '[220,10,137,138,20,21,165,166,36,218,363,133,199,335,136,364,138,55,176,27]',
                'measurements' => '[23,296,32,25,117,5,17,273,296,132,163,20,25,117,25,326,25,78,101,5]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            123 => 
            array (
                'id' => 124,
                'tmdb_id' => 53012,
                'name' => 'Gigantes Plaki',
                'category_id' => 4,
                'area_id' => 23,
                'instructions' => 'Soak the beans overnight in plenty of water. Drain, rinse, then place in a pan covered with water. Bring to the boil, reduce the heat, then simmer for approx 50 mins until slightly tender but not soft. Drain, then set aside.

Heat oven to 180C/160C fan/gas 4. Heat the olive oil in a large frying pan, tip in the onion and garlic, then cook over a medium heat for 10 mins until softened but not browned. Add the tomato purée, cook for a further min, add remaining ingredients, then simmer for 2-3 mins. Season generously, then stir in the beans. Tip into a large ovenproof dish, then bake for approximately 1 hr, uncovered and without stirring, until the beans are tender. The beans will absorb all the fabulous flavours and the sauce will thicken. Allow to cool, then scatter with parsley and drizzle with a little more olive oil to serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/b79r6f1585566277.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=e-2K2iyPASA',
                'ingredients' => '[91,47,53,28,123,54,23,365,14,366]',
                'measurements' => '[42,20,140,101,25,286,117,117,95,25]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            124 => 
            array (
                'id' => 125,
                'tmdb_id' => 53021,
            'name' => 'Golabki (cabbage roll)',
                'category_id' => 3,
                'area_id' => 14,
                'instructions' => 'Bring a large pot of lightly salted water to a boil. Place cabbage head into water, cover pot, and cook until cabbage leaves are slightly softened enough to remove from head, 3 minutes. Remove cabbage from pot and let cabbage sit until leaves are cool enough to handle, about 10 minutes.

Remove 18 whole leaves from the cabbage head, cutting out any thick tough center ribs. Set whole leaves aside. Chop the remainder of the cabbage head and spread it in the bottom of a casserole dish.

Melt butter in a large skillet over medium-high heat. Cook and stir onion in hot butter until tender, 5 to 10 minutes. Cool.

Stir onion, beef, pork, rice, garlic, 1 teaspoon salt, and 1/4 teaspoon pepper together in a large bowl.

Preheat oven to 350 degrees F (175 degrees C).

Place about 1/2 cup beef mixture on a cabbage leaf. Roll cabbage around beef mixture, tucking in sides to create an envelope around the meat. Repeat with remaining leaves and meat mixture. Place cabbage rolls in a layer atop the chopped cabbage in the casserole dish; season rolls with salt and black pepper.

Whisk tomato soup, tomato juice, and ketchup together in a bowl. Pour tomato soup mixture over cabbage rolls and cover dish wish aluminum foil.

Bake in the preheated oven until cabbage is tender and meat is cooked through, about 1 hour.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/q8sp3j1593349686.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=rBrTkDdoPYg',
                'ingredients' => '[169,2,53,157,334,155,55,21,182,123]',
                'measurements' => '[32,25,140,155,141,314,5,5,273,327]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            125 => 
            array (
                'id' => 126,
                'tmdb_id' => 53041,
                'name' => 'Grilled Portuguese sardines',
                'category_id' => 8,
                'area_id' => 26,
                'instructions' => 'STEP 1

Put all of the ingredients, except the sardines, into a bowl and mix together with some seasoning. Pour into a baking dish, add the sardines and toss really well. Cover and chill for a few hours.

STEP 2

Heat a BBQ or griddle pan until hot. Cook the sardines for 4-5 minutes on each side or until really caramelised and charred. Put onto a serving plate, drizzle with oil, sprinkle with a little more paprika and squeeze over the lemon wedges.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/lpd4wy1614347943.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=JYtMjKa6cdY',
                'ingredients' => '[354,47,55,167,109,61,243]',
                'measurements' => '[24,25,176,117,142,328,32]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            126 => 
            array (
                'id' => 127,
                'tmdb_id' => 53074,
                'name' => 'Grilled eggplant with coconut milk',
                'category_id' => 4,
                'area_id' => 17,
                'instructions' => '.  Prepare the eggplants for grilling by pricking them all over with a fork.  This is so it won’t burst during the grilling process as the natural water in it heats up.
2.  Grill the eggplants, turning them over frequently to ensure even cooking.  Grill until the skins are dark brown, even black and the eggplant is soft when you touch it.
3.  Soak the grilled eggplant in a bowl of water to cool it down.  Peel the skin off the eggplant.  Place the whole eggplants in a shallow dish (my mom actually cuts the eggplant into small, bite-sized pieces).
4.  In a small mixing bowl, mix together the coconut milk or cream, lemon powder, salt and hot pepper.  Mix until the lemon powder and salt dissolve.  Taste, then adjust the amount of lemon powder, salt and hot pepper to your liking.  Pour the mixture over the eggplant.  Sprinkle the green onions over the eggplant and coconut milk.  Stir gently to combine. 
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/bopa2i1683209167.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ourC5IhljB4',
                'ingredients' => '[316,35,110,21,213,70]',
                'measurements' => '[21,26,117,5,152,329]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            127 => 
            array (
                'id' => 128,
                'tmdb_id' => 52773,
                'name' => 'Honey Teriyaki Salmon',
                'category_id' => 8,
                'area_id' => 19,
                'instructions' => 'Mix all the ingredients in the Honey Teriyaki Glaze together. Whisk to blend well. Combine the salmon and the Glaze together.

Heat up a skillet on medium-low heat. Add the oil, Pan-fry the salmon on both sides until it’s completely cooked inside and the glaze thickens.

Garnish with sesame and serve immediately.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xxyupu1468262513.jpg',
                'tags' => '[40,13,58]',
                'youtube_url' => 'https://www.youtube.com/watch?v=4MpYuaJsvRw',
                'ingredients' => '[144,47,133,237,317]',
                'measurements' => '[155,226,193,193,330]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            128 => 
            array (
                'id' => 129,
                'tmdb_id' => 52787,
                'name' => 'Hot Chocolate Fudge',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Line an 8-inch-square baking pan with wax paper or foil, and coat with non-stick spray.
In a microwave-safe bowl, combine the dark chocolate chips, heavy cream and half of the sweetened condensed milk. Microwave the dark chocolate mixture in 20-second intervals, stirring in between each interval, until the chocolate is melted.
Add the vanilla extract to the dark chocolate mixture and stir well until smooth.
Transfer the dark chocolate mixture into the prepared pan and spread into an even layer.
In a separate bowl, combine the white chocolate chips with the remaining half of the sweetened condensed milk. Microwave the white chocolate mixture in 20-second intervals, stirring in between each interval, until the chocolate is melted.
Evenly spread the white chocolate mixture on top of dark chocolate layer.
Top the chocolate layers with the Mallow Bits or miniature marshmallows, and gently press them down.
Refrigerate for 4 hours, or until set.
Remove the fudge and wax paper from the pan. Carefully peel all of the wax paper from the fudge.
Cut the fudge into bite-sized pieces and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xrysxr1483568462.jpg',
                'tags' => '[38,36]',
                'youtube_url' => 'https://www.youtube.com/watch?v=oJvbsVSblfk',
                'ingredients' => '[367,215,368,94,369,370]',
                'measurements' => '[61,25,331,5,332,333]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            129 => 
            array (
                'id' => 130,
                'tmdb_id' => 52954,
                'name' => 'Hot and Sour Soup',
                'category_id' => 10,
                'area_id' => 10,
                'instructions' => 'STEP 1 - MAKING THE SOUP
In a wok add chicken broth and wait for it to boil.
Next add salt, sugar, sesame seed oil, white pepper, hot pepper sauce, vinegar and soy sauce and stir for few seconds.
Add Tofu, mushrooms, black wood ear mushrooms to the wok.
To thicken the sauce, whisk together 1 Tablespoon of cornstarch and 2 Tablespoon of water in a bowl and slowly add to your soup until it\'s the right thickness.
Next add 1 egg slightly beaten with a knife or fork and add it to the soup and stir for 8 seconds
Serve the soup in a bowl and add the bbq pork and sliced green onions on top.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529445893.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=KgV9Zq3aSTo',
                'ingredients' => '[45,371,372,152,218,21,23,136,102,154,373,133,134,36,176]',
                'measurements' => '[232,232,190,132,136,17,273,5,273,17,333,5,117,25,163]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            130 => 
            array (
                'id' => 131,
                'tmdb_id' => 52967,
                'name' => 'Home-made Mandazi',
                'category_id' => 9,
                'area_id' => 27,
                'instructions' => 'This is one recipe a lot of people have requested and I have tried to make it as simple as possible and I hope it will work for you. Make sure you use the right flour which is basically one with raising agents. Adjust the amount of sugar to your taste and try using different flavours to have variety whenever you have them.
You can use Coconut milk instead of regular milk, you can also add desiccated coconut to the dry flour or other spices like powdered cloves or cinnamon.
For “healthy looking” mandazis do not roll the dough too thin before frying and use the procedure I have indicated above.

1. Mix the flour,cinnamon and sugar in a suitable bowl.
2. In a separate bowl whisk the egg into the milk
3. Make a well at the centre of the flour and add the milk and egg mixture and slowly mix to form a dough.
4. Knead the dough for 3-4 minutes or until it stops sticking to the sides of the bowl and you have a smooth surface.
5. Cover the dough with a damp cloth  and allow to rest for 15 minutes.
6. Roll the dough on a lightly floured surface into a 1cm thick piece.
7. Using a sharp small knife, cut the dough into the desired size setting aside ready for deep frying.
8. Heat your oil in a suitable pot and gently dip the mandazi pieces to cook until light brown on the first side then turn to cook on the second side.
9. Serve them warm or cold',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/thazgm1555350962.jpg',
                'tags' => '[2,13,55,59,38]',
                'youtube_url' => '',
                'ingredients' => '[113,23,18,16]',
                'measurements' => '[98,187,4,27]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            131 => 
            array (
                'id' => 132,
                'tmdb_id' => 52993,
                'name' => 'Honey Balsamic Chicken with Crispy Broccoli & Potatoes',
                'category_id' => 2,
                'area_id' => 4,
                'instructions' => '2 Servings

1. Preheat oven to 425 degrees. Wash and dry all produce. Cut potatoes into 1/2-inch-thick wedges. Toss on one side of a baking sheet with a drizzle of oil, salt, and pepper. (For 4 servings, spread potatoes out across entire sheet.) Roast on top rack for 5 minutes (we\'ll add the broccoli then). 

2. Meanwhile, cut broccoli florets into bite-size pieces, if necessary. Peel and finely chop garlic. In a small microwave-safe bowl, combine 1 TBSP olive oil (2 TBSP for 4 servings) and half the garlic. Microwave until garlic sizzles, 30 seconds. 

3. Once potatoes have roasted 5 minutes, remove sheet from oven and add broccoli to empty side; carefully toss with garlic oil, salt, and pepper. (For 4 servings, add broccoli to a second sheet.) Continue roasting until potatoes and broccoli are browned and crispy, 15-20 minutes more. 

4. While veggies roast, pat chicken dry with paper towels; season all over with salt and pepper. Heat a drizzle of oil in a large pan over medium-high heat. Add chicken and cook until browned and cooked through, 5-6 minutes per side. (If chicken browns too quickly, reduce heat to medium.) Turn off heat; set chicken aside to rest. Wash out pan. 

5. Heat pan used for chicken over medium-high heat. Add a drizzle of oil and remaining garlic; cook until fragrant, 30 seconds. Stir in vinegar, honey, stock concentrate, and 1/4 cup water (1/3 cup for 4 servings). Simmer until thick and glossy, 2-3 minutes. Remove from heat and stir in 1 TBSP butter (2 TBSP for 4). Season with salt and pepper. 

6. Return chicken to pan and turn to coat in glaze. Divide chicken, broccoli, and potatoes between plates. Spoon any remaining glaze over chicken and serve. ',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/kvbotn1581012881.jpg',
                'tags' => '[]',
                'youtube_url' => '',
                'ingredients' => '[66,68,55,220,77,199,218,2,135,47]',
                'measurements' => '[174,32,154,4,30,30,30]',
                'created_at' => '2025-04-15 09:39:22',
                'updated_at' => '2025-04-15 09:39:22',
            ),
            132 => 
            array (
                'id' => 133,
                'tmdb_id' => 53007,
                'name' => 'Honey Yogurt Cheesecake',
                'category_id' => 1,
                'area_id' => 23,
            'instructions' => 'Heat oven to 160C/140C fan/gas 3. Crush the biscuits and most of the almonds inside a plastic food bag using a rolling pin. Mix with the butter, then press into the bottom of a deep, oval, 23cm dish (or something similar in size – a roasting tin, baking dish or cake tin will work). Bake for 10 mins until crisp.

Stir or mash together the yogurt and mascarpone, then whisk in the eggs, one at a time. Stir in the lemon and orange zests, then stir in most of the honey, reserving about 3 tbsp. Spread over the biscuit base, cover loosely with foil and cook for 1 hr. Remove the foil and cook for 15 mins more until lightly golden and the top is firm with just the slightest wobble in the middle. Leave to cool. Can be kept in the fridge for up to 2 days.

To serve, scatter with almonds, drizzle over the remaining honey, and hand around fresh fruit to go with it.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/y2irzl1585563479.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=JE8crtueXs8',
                'ingredients' => '[1,114,2,374,296,18,109,202,199,375]',
                'measurements' => '[121,276,276,288,98,4,197,197,288,12]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            133 => 
            array (
                'id' => 134,
                'tmdb_id' => 53035,
                'name' => 'Ham hock colcannon',
                'category_id' => 10,
                'area_id' => 15,
                'instructions' => 'STEP 1
Peel and cut the potatoes into even, medium-sized chunks. Put in a large pan filled with cold salted water, bring to the boil and cook for 10-15 mins until a knife can be inserted into the potatoes easily.

STEP 2
Meanwhile, melt the butter in a large sauté pan over a medium heat. Add the garlic, cabbage, spring onions and some seasoning. Stir occasionally until the cabbage is wilted but still retains a little bite, then set aside.

STEP 3
Drain the potatoes, leave to steam-dry for a couple of mins, then mash with the cream, mustard and seasoning in the same saucepan. Stir in the cabbage and ham hock. Keep warm over a low heat.

STEP 4
Reheat the pan you used to cook the cabbage (no need to wash first), add a splash of oil, crack in the eggs and fry to your liking. To serve, divide the colcannon between bowls and top each with a fried egg.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/n41ny81608588066.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=aQJAU2iJ730',
                'ingredients' => '[336,2,28,169,176,43,65,270,18]',
                'measurements' => '[286,113,164,140,24,82,25,128,60]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            134 => 
            array (
                'id' => 135,
                'tmdb_id' => 52781,
                'name' => 'Irish stew',
                'category_id' => 3,
                'area_id' => 15,
                'instructions' => 'Heat the oven to 180C/350F/gas mark 4. Drain and rinse the soaked wheat, put it in a medium pan with lots of water, bring to a boil and simmer for an hour, until cooked. Drain and set aside.

Season the lamb with a teaspoon of salt and some black pepper. Put one tablespoon of oil in a large, deep sauté pan for which you have a lid; place on a medium-high heat. Add some of the lamb – don\'t overcrowd the pan – and sear for four minutes on all sides. Transfer to a bowl, and repeat with the remaining lamb, adding oil as needed.

Lower the heat to medium and add a tablespoon of oil to the pan. Add the shallots and fry for four minutes, until caramelised. Tip these into the lamb bowl, and repeat with the remaining vegetables until they are all nice and brown, adding more oil as you need it.

Once all the vegetables are seared and removed from the pan, add the wine along with the sugar, herbs, a teaspoon of salt and a good grind of black pepper. Boil on a high heat for about three minutes.

Tip the lamb, vegetables and whole wheat back into the pot, and add the stock. Cover and boil for five minutes, then transfer to the oven for an hour and a half.

Remove the stew from the oven and check the liquid; if there is a lot, remove the lid and boil for a few minutes.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sxxpst1468569714.jpg',
                'tags' => '[8,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=kYH2qJXnSMo',
                'ingredients' => '[376,377,47,103,64,378,124,379,214,5,380,75,218]',
                'measurements' => '[334,335,336,244,147,4,32,122,103,5,328,328,255]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            135 => 
            array (
                'id' => 136,
                'tmdb_id' => 52890,
                'name' => 'Jam Roly-Poly',
                'category_id' => 1,
                'area_id' => 1,
            'instructions' => 'Put a deep roasting tin onto the bottom shelf of the oven, and make sure that there’s another shelf directly above it. Pull the roasting tin out on its shelf, fill two-thirds with boiling water from the kettle, then carefully slide it back in. Heat oven to 180C/160C fan/gas 4. Tear off a large sheet of foil and greaseproof paper (about 30 x 40cm). Sit the greaseproof on top of the foil and butter it.
Tip butter, flour and vanilla seeds into a food processor; pulse until the butter has disappeared. Tip into a mixing bowl. Stir through the suet, pour in the milk and work together with a cutlery knife until you get a sticky dough. You may need a drop more milk, depending on your flour.
Tip the dough out onto a floured surface, quickly pat together to smooth, then roll out to a square roughly 25 x 25cm. Spread the jam all over, leaving a gap along one edge, then roll up from the opposite edge. Pinch the jam-free edge into the dough where it meets, and pinch the ends roughly, too. Carefully lift onto the greased paper, join-side down (you might find a flat baking sheet helpful for this), loosely bring up the paper and foil around it, then scrunch together along the edges and ends to seal. The roly-poly will puff quite a bit during cooking so don’t wrap it tightly. Lift the parcel directly onto the rack above the tin and cook for 1 hr.
Let the pudding sit for 5 mins before unwrapping, then carefully open the foil and paper, and thickly slice to serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ysqupp1511640538.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=5ZYWVQ8imVA',
                'ingredients' => '[2,113,260,100,16,39,295]',
                'measurements' => '[113,79,284,113,103,121,12]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            136 => 
            array (
                'id' => 137,
                'tmdb_id' => 52937,
                'name' => 'Jerk chicken with rice & peas',
                'category_id' => 2,
                'area_id' => 9,
                'instructions' => 'To make the jerk marinade, combine all the ingredients in a food processor along with 1 tsp salt, and blend to a purée. If you’re having trouble getting it to blend, just keep turning off the blender, stirring the mixture, and trying again. Eventually it will start to blend up – don’t be tempted to add water, as you want a thick paste.

Taste the jerk mixture for seasoning – it should taste pretty salty, but not unpleasantly, puckering salty. You can now throw in more chillies if it’s not spicy enough for you. If it tastes too salty and sour, try adding in a bit more brown sugar until the mixture tastes well balanced.

Make a few slashes in the chicken thighs and pour the marinade over the meat, rubbing it into all the crevices. Cover and leave to marinate overnight in the fridge.

If you want to barbecue your chicken, get the coals burning 1 hr or so before you’re ready to cook. Authentic jerked meats are not exactly grilled as we think of grilling, but sort of smoke-grilled. To get a more authentic jerk experience, add some wood chips to your barbecue, and cook your chicken over slow, indirect heat for 30 mins. To cook in the oven, heat to 180C/160C fan/gas 4. Put the chicken pieces in a roasting tin with the lime halves and cook for 45 mins until tender and cooked through.

While the chicken is cooking, prepare the rice & peas. Rinse the rice in plenty of cold water, then tip it into a large saucepan with all the remaining ingredients except the kidney beans. Season with salt, add 300ml cold water and set over a high heat. Once the rice begins to boil, turn it down to a medium heat, cover and cook for 10 mins.

Add the beans to the rice, then cover with a lid. Leave off the heat for 5 mins until all the liquid is absorbed. Squeeze the roasted lime over the chicken and serve with the rice & peas, and some hot sauce if you like it really spicy.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tytyxu1515363282.jpg',
                'tags' => '[60,48]',
                'youtube_url' => 'https://www.youtube.com/watch?v=qfchrS2D_v4',
                'ingredients' => '[25,132,176,27,55,53,243,60,132,133,135,275,72,283,35,176,60,55,72,381]',
                'measurements' => '[172,142,171,110,176,142,164,210,146,25,25,20,117,102,42,171,241,243,117,286]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            137 => 
            array (
                'id' => 138,
                'tmdb_id' => 52938,
                'name' => 'Jamaican Beef Patties',
                'category_id' => 3,
                'area_id' => 9,
                'instructions' => 'Make the Pastry Dough

To a large bowl, add flour, 1 teaspoon salt, and turmeric and mix thoroughly.
Rub shortening into flour until there are small pieces of shortening completely covered with flour.
Pour in 1/2 cup of the ice water and mix with your hands to bring the dough together. Keep adding ice water 2 to 3 tablespoons at a time until the mixture forms a dough.
At this stage, you can cut the dough into 2 large pieces, wrap in plastic and refrigerate for 30 minutes before using it.
Alternatively, cut the dough into 10 to 12 equal pieces, place on a platter or baking sheet, cover securely with plastic wrap and let chill for 30 minutes while you make the filling.
Make the Filling

Add ground beef to a large bowl. Sprinkle in allspice and black pepper. Mix together and set aside.
Heat oil in a skillet until hot.
Add onions and sauté until translucent. Add hot pepper, garlic and thyme and continue to sauté for another minute. Add 1/4 teaspoon salt.
Add seasoned ground beef and toss to mix, breaking up any clumps, and let cook until the meat is no longer pink.
Add ketchup and more salt to taste.
Pour in 2 cups of water and stir. Bring the mixture to a boil then reduce heat and let simmer until most of the liquid has evaporated and whatever is remaining has reduced to a thick sauce.
Fold in green onions. Remove from heat and let cool completely.
Assemble the Patties

Beat the egg and water together to make an egg wash. Set aside.
Now you can prepare the dough in two ways.
First Method: Flour the work surface and rolling pin. If you had cut it into 2 large pieces, then take one of the large pieces and roll it out into a very large circle. Take a bowl with a wide rim (about 5 inches) and cut out three circles.

Place about 3 heaping tablespoons of the filling onto 1/2 of each circle. Dip a finger into the water and moisten the edges of the pastry. Fold over the other half and press to seal. 

Take a fork and crimp the edges. Cut off any extra to make it look neat and uniform. Place on a parchment-lined baking sheet and continue to work until you have rolled all the dough and filled the patties.
Second Method: If you had pre-cut the dough into individual pieces, work with one piece of dough at a time. Roll it out on a floured surface into a 5-inch circle or a little larger. Don’t worry if the edges are not perfect.

Place 3 heaping tablespoons of the filling on one side of the circle. Dip a finger into the water and moisten the edges of the pastry. Fold over the other half and press to seal.

Take a fork and crimp the edges. Cut off any extra to make it look neat and uniform. Place on a parchment-lined baking sheet and continue work until you have rolled all the dough and filled the patties.

Frying and Serving the Patties

After forming the patties, place the pans in the refrigerator while you heat the oven to 350 F.
Just before adding the pans with the patties to the oven, brush the patties with egg wash.
Bake patties for 30 minutes or until golden brown.
Cool on wire racks.
Serve warm.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wsqqsw1515364068.jpg',
                'tags' => '[38,9]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ypQjoiZiTac',
                'ingredients' => '[10,21,382,2,36,158,72,182,135,70,131,55,60,21,79,36,70,137,36,36]',
                'measurements' => '[167,5,5,79,27,109,5,17,25,27,337,338,117,273,25,61,132,293,117,163]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            138 => 
            array (
                'id' => 139,
                'tmdb_id' => 53033,
                'name' => 'Japanese gohan rice',
                'category_id' => 7,
                'area_id' => 19,
                'instructions' => 'STEP 1
Rinsing and soaking your rice is key to achieving the perfect texture. Measure the rice into a bowl, cover with cold water, then use your fingers to massage the grains of rice – the water will become cloudy. Drain and rinse again with fresh water. Repeat five more times until the water stays clear.

STEP 2
Tip the rinsed rice into a saucepan with 400ml water, or 200ml dashi and 200ml water, bring to the boil, then turn down the heat to a low simmer, cover with a tight-fitting lid with a steam hole and cook for 15 mins. Remove from the heat and leave to sit for another 15 mins, then stir through the mirin. Remove the lid and give it a good stir. Serve with any or all of the optional toppings.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/kw92t41604181871.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=rZO86_-MIp0',
                'ingredients' => '[383,384,307,176]',
                'measurements' => '[9,117,138,138]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            139 => 
            array (
                'id' => 140,
                'tmdb_id' => 53034,
                'name' => 'Japanese Katsudon',
                'category_id' => 10,
                'area_id' => 19,
                'instructions' => 'STEP 1
Heat the oil in a pan, fry the sliced onion until golden brown, then add the tonkatsu (see recipe here), placing it in the middle of the pan. Mix the dashi, soy, mirin and sugar together and tip three-quarters of the mixture around the tonkatsu. Sizzle for a couple of mins so the sauce thickens a little and the tonkatsu reheats.

STEP 2
Tip the beaten eggs around the tonkatsu and cook for 2-3 mins until the egg is cooked through but still a little runny. Divide the rice between two bowls, then top each with half the egg and tonkatsu mix, sprinkle over the chives and serve immediately, drizzling with a little more soy if you want an extra umami kick.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/d8f6qx1604182128.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=voE-MBJqBVk',
                'ingredients' => '[135,53,152,87,133,384,23,18,383,349]',
                'measurements' => '[117,50,140,103,117,5,5,49,102,159]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            140 => 
            array (
                'id' => 141,
                'tmdb_id' => 52769,
                'name' => 'Kapsalon',
                'category_id' => 12,
                'area_id' => 12,
                'instructions' => 'Cut the meat into strips. Heat oil in a pan and fry the strips for 6 minutes until it\'s ready.
Bake the fries until golden brown in a deep fryrer. When ready transfer to a backing dish. Make sure the fries are spread over the whole dish.
Cover the fries with a new layer of meat and spread evenly.
Add a layer of cheese over the meat. You can also use grated cheese. When done put in the oven for a few minutes until the cheese is melted.
Chop the lettuce, tomato and cucumber in small pieces and mix together. for a basic salad. As extra you can add olives jalapenos and a red union.
Dived the salad over the dish and Serve with garlicsauce and hot sauce',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sxysrt1468240488.jpg',
                'tags' => '[38]',
                'youtube_url' => 'https://www.youtube.com/watch?v=UIcuiU1kV8I',
                'ingredients' => '[385,386,314,154,246,130,156,387]',
                'measurements' => '[339,340,83,83,341,32,342,343]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            141 => 
            array (
                'id' => 142,
                'tmdb_id' => 52813,
                'name' => 'Kentucky Fried Chicken',
                'category_id' => 2,
                'area_id' => 4,
                'instructions' => 'Preheat fryer to 350°F. Thoroughly mix together all the spice mix ingredients.
Combine spice mix with flour, brown sugar and salt.
Dip chicken pieces in egg white to lightly coat them, then transfer to flour mixture. Turn a few times and make sure the flour mix is really stuck to the chicken. Repeat with all the chicken pieces.
Let chicken pieces rest for 5 minutes so crust has a chance to dry a bit.
Fry chicken in batches. Breasts and wings should take 12-14 minutes, and legs and thighs will need a few more minutes. Chicken pieces are done when a meat thermometer inserted into the thickest part reads 165°F.
Let chicken drain on a few paper towels when it comes out of the fryer. Serve hot.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xqusqy1487348868.jpg',
                'tags' => '[7,9]',
                'youtube_url' => 'https://www.youtube.com/watch?v=PTUxCvCz8Bc',
                'ingredients' => '[129,17,177,19,275,21,167,165,289,182,308,388,166,72,75,171,172]',
                'measurements' => '[139,344,32,314,226,226,226,345,206,206,210,210,210,210,210,210,210]',
                'created_at' => '2025-04-15 09:39:23',
                'updated_at' => '2025-04-15 09:39:23',
            ),
            142 => 
            array (
                'id' => 143,
                'tmdb_id' => 52820,
                'name' => 'Katsu Chicken curry',
                'category_id' => 2,
                'area_id' => 19,
                'instructions' => 'Prep:15min  ›  Cook:30min  ›  Ready in:45min 

For the curry sauce: Heat oil in medium non-stick saucepan, add onion and garlic and cook until softened. Stir in carrots and cook over low heat for 10 to 12 minutes.
Add flour and curry powder; cook for 1 minute. Gradually stir in stock until combined; add honey, soy sauce and bay leaf. Slowly bring to the boil.
Turn down heat and simmer for 20 minutes or until sauce thickens but is still of pouring consistency. Stir in garam masala. Pour the curry sauce through a sieve; return to saucepan and keep on low heat until ready to serve.
For the chicken: Season both sides of chicken breasts with salt and pepper. Place flour, egg and breadcrumbs in separate bowls and arrange in a row. Coat the chicken breasts in flour, then dip them into the egg, then coat in breadcrumbs, making sure you cover both sides.
Heat oil in large frying pan over medium-high heat. Place chicken into hot oil and cook until golden brown, about 3 or 4 minutes each side. Once cooked, place on kitchen paper to absorb excess oil.
Pour curry sauce over chicken, serve with white rice and enjoy!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vwrpps1503068729.jpg',
                'tags' => '[48,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=MWzxDFRtVbc',
                'ingredients' => '[220,10,137,150,135,69,70,55,389,10,382,218,199,133,99,211]',
                'measurements' => '[346,193,293,347,348,193,123,349,123,193,350,240,345,350,32,206]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            143 => 
            array (
                'id' => 144,
                'tmdb_id' => 52859,
                'name' => 'Key Lime Pie',
                'category_id' => 1,
                'area_id' => 4,
            'instructions' => 'Heat the oven to 160C/fan 140C/gas 3. Whizz the biscuits to crumbs in a food processor (or put in a strong plastic bag and bash with a rolling pin). Mix with the melted butter and press into the base and up the sides of a 22cm loose-based tart tin. Bake in the oven for 10 minutes. Remove and cool.
Put the egg yolks in a large bowl and whisk for a minute with electric beaters. Add the condensed milk and whisk for 3 minutes then add the zest and juice and whisk again for 3 minutes. Pour the filling into the cooled base then put back in the oven for 15 minutes. Cool then chill for at least 3 hours or overnight if you like.
When you are ready to serve, carefully remove the pie from the tin and put on a serving plate. To decorate, softly whip together the cream and icing sugar. Dollop or pipe the cream onto the top of the pie and finish with extra lime zest.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qpqtuu1511386216.jpg',
                'tags' => '[19,16,14,3,61]',
                'youtube_url' => 'https://www.youtube.com/watch?v=q4Rz7tUkX9A',
                'ingredients' => '[1,2,368,51,132,43,118,132]',
                'measurements' => '[9,81,42,57,60,118,77,12]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            144 => 
            array (
                'id' => 145,
                'tmdb_id' => 52868,
                'name' => 'Kidney Bean Curry',
                'category_id' => 4,
                'area_id' => 3,
                'instructions' => 'Heat the oil in a large frying pan over a low-medium heat. Add the onion and a pinch of salt and cook slowly, stirring occasionally, until softened and just starting to colour. Add the garlic, ginger and coriander stalks and cook for a further 2 mins, until fragrant.

Add the spices to the pan and cook for another 1 min, by which point everything should smell aromatic. Tip in the chopped tomatoes and kidney beans in their water, then bring to the boil.

Turn down the heat and simmer for 15 mins until the curry is nice and thick. Season to taste, then serve with the basmati rice and the coriander leaves.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sywrsu1511463066.jpg',
                'tags' => '[48]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Tp_PMWvIKzo',
                'ingredients' => '[135,53,55,27,32,31,167,211,249,381,283]',
                'measurements' => '[77,85,243,351,66,5,5,37,42,42,12]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            145 => 
            array (
                'id' => 146,
                'tmdb_id' => 52887,
                'name' => 'Kedgeree',
                'category_id' => 8,
                'area_id' => 1,
                'instructions' => 'For the rice, heat the oil in a large, lidded pan, add the onion, then gently fry for 5 mins until softened but not coloured. Add the spices, season with salt, then continue to fry until the mix start to go brown and fragrant; about 3 mins.
Add the rice and stir in well. Add 600ml water, stir, then bring to the boil. Reduce to a simmer, then cover for 10 mins. Take off the heat and leave to stand, covered, for 10-15 mins more. The rice will be perfectly cooked if you do not lift the lid before the end of the cooking.
Meanwhile, put the haddock and bay leaves in a frying pan, cover with the milk, then poach for 10 mins until the flesh flakes. Remove from the milk, peel away the skin, then flake the flesh into thumbsize pieces. Place the eggs in a pan, cover with water, bring to the boil, then reduce to a simmer. Leave for 4½-5 mins, plunge into cold water, then peel and cut the eggs into quarters. Gently mix the fish, eggs, parsley, coriander and rice together in the pan. Serve hot, sprinkled with a few extra herbs.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/utxqpt1511639216.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_Pw1I1-SItE',
                'ingredients' => '[390,62,16,18,83,32,135,53,32,382,155]',
                'measurements' => '[9,4,118,60,245,245,25,140,5,37,9]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            146 => 
            array (
                'id' => 147,
                'tmdb_id' => 52945,
                'name' => 'Kung Pao Chicken',
                'category_id' => 2,
                'area_id' => 10,
                'instructions' => 'Combine the sake or rice wine, soy sauce, sesame oil and cornflour dissolved in water. Divide mixture in half.
In a glass dish or bowl, combine half of the sake mixture with the chicken pieces and toss to coat. Cover dish and place in refrigerator for about 30 minutes.
In a medium frying pan, combine remaining sake mixture, chillies, vinegar and sugar. Mix together and add spring onion, garlic, water chestnuts and peanuts. Heat sauce slowly over medium heat until aromatic.
Meanwhile, remove chicken from marinade and sauté in a large frying pan until juices run clear. When sauce is aromatic, add sautéed chicken and let simmer together until sauce thickens.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1525872624.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=QqdcCHQlOe0',
                'ingredients' => '[237,133,136,106,36,129,184,335,275,176,28,391,392]',
                'measurements' => '[25,25,25,25,25,47,117,5,117,352,52,252,121]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            147 => 
            array (
                'id' => 148,
                'tmdb_id' => 52946,
                'name' => 'Kung Po Prawns',
                'category_id' => 8,
                'area_id' => 10,
                'instructions' => 'Mix the cornflour and 1 tbsp soy sauce, toss in the prawns and set aside for 10 mins. Stir the vinegar, remaining soy sauce, tomato purée, sugar and 2 tbsp water together to make a sauce.

When you’re ready to cook, heat a large frying pan or wok until very hot, then add 1 tbsp oil. Fry the prawns until they are golden in places and have opened out– then tip them out of the pan.

Heat the remaining oil and add the peanuts, chillies and water chestnuts. Stir-fry for 2 mins or until the peanuts start to colour, then add the ginger and garlic and fry for 1 more min. Tip in the prawns and sauce and simmer for 2 mins until thickened slightly. Serve with rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1525873040.jpg',
                'tags' => '[43]',
                'youtube_url' => 'https://www.youtube.com/watch?v=ysiuZm9FIxs',
                'ingredients' => '[340,133,123,106,5,69,392,393,275,28,391,27]',
                'measurements' => '[42,25,5,5,5,5,276,62,117,52,353,152]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            148 => 
            array (
                'id' => 149,
                'tmdb_id' => 52971,
                'name' => 'Kafteji',
                'category_id' => 4,
                'area_id' => 21,
                'instructions' => 'Peel potatoes and cut into 5cm cubes.
Pour 1-2 cm of olive oil into a large pan and heat up very hot. Fry potatoes until golden brown for 20 minutes, turning from time to time. Place on kitchen paper to drain.
Cut the peppers in half and remove seeds. Rub a little olive oil on them and place the cut side down on a baking tray. Place them under the grill. Grill until the skin is dark and bubbly. While the peppers are still hot, put them into a plastic sandwich bag and seal it. Take them out after 15 minutes and remove skins.
In the meantime, heat more olive oil another pan. Peel the onions and cut into thin rings. Fry for 15 minutes until golden brown, turning them often. Add the Ras el hanout at the end.
Cut the pumpkin into 5cm cubes and fry in the same pan you used for the potatoes for 10-15 minutes until it is soft and slightly browned. Place on kitchen paper.
Pour the remaining olive oil out of the pan and put all the cooked vegetables into the pan and mix. Whisk eggs and pour them over the vegetables. Put the lid on the pan so that the eggs cook. Put the contents of the pan onto a large chopping board, add salt and pepper and chopped and mix everything with a big knife.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1bsv1q1560459826.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=-TFf-Zu-xQU',
                'ingredients' => '[66,47,183,70,394,395,18,21,102]',
                'measurements' => '[354,25,32,174,117,47,244,95,95]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            149 => 
            array (
                'id' => 150,
                'tmdb_id' => 52974,
                'name' => 'Keleya Zaara',
                'category_id' => 12,
                'area_id' => 21,
                'instructions' => 'Heat the vegetable oil in a large frying pan over medium-high heat. Add the lamb and cook until browned on all sides, about 5 minutes. Season with saffron, salt and pepper to taste; stir in all but 4 tablespoons of the onion, and pour in the water. Bring to the boil, then cover, reduce heat to medium-low, and simmer until the lamb is tender, about 15 minutes.
Uncover the pan, stir in the butter and allow the sauce reduce 5 to 10 minutes to desired consistency. Season to taste with salt and pepper, then pour into a serving dish. Sprinkle with the remaining chopped onions and parsley. Garnish with lemon wedges to serve.
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/8x09hy1560460923.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=u_OSIChzuL0',
                'ingredients' => '[47,396,397,53,36,83,2,109]',
                'measurements' => '[182,98,162,285,355,10,117,32]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            150 => 
            array (
                'id' => 151,
                'tmdb_id' => 52978,
                'name' => 'Kumpir',
                'category_id' => 7,
                'area_id' => 22,
                'instructions' => 'If you order kumpir in Turkey, the standard filling is first, lots of butter mashed into the potato, followed by cheese. There’s then a row of other toppings that you can just point at to your heart’s content – sweetcorn, olives, salami, coleslaw, Russian salad, allsorts – and you walk away with an over-stuffed potato because you got ever-excited by the choices on offer.

Grate (roughly – you can use as much as you like) 150g of cheese.
Finely chop one onion and one sweet red pepper.
Put these ingredients into a large bowl with a good sprinkling of salt and pepper, chilli flakes (optional).',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/mlchx21564916997.jpg',
                'tags' => '[20]',
                'youtube_url' => 'https://www.youtube.com/watch?v=IEDEtZ4UVtI',
                'ingredients' => '[66,2,161,53,131,398]',
                'measurements' => '[161,25,81,50,50,95]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            151 => 
            array (
                'id' => 152,
                'tmdb_id' => 53015,
                'name' => 'Krispy Kreme Donut',
                'category_id' => 1,
                'area_id' => 4,
            'instructions' => 'Dissolve yeast in warm water in 2 1/2-quart bowl. Add milk, sugar, salt, eggs, shortening and 2 cups flour. Beat on low for 30 seconds, scraping bowl constantly. Beat on medium speed for 2 minutes, scraping bowl occasionally. Stir in remaining flour until smooth. Cover and let rise until double, 50-60 minutes. (Dough is ready when indentation remains when touched.) Turn dough onto floured surface; roll around lightly to coat with flour. Gently roll dough 1/2-inch thick with floured rolling pin. Cut with floured doughnut cutter. Cover and let rise until double, 30-40 minutes.
Heat vegetable oil in deep fryer to 350°. Slide doughnuts into hot oil with wide spatula. Turn doughnuts as they rise to the surface. Fry until golden brown, about 1 minute on each side. Remove carefully from oil (do not prick surface); drain. Dip the doughnuts into creamy glaze set on rack.


Glaze: 
Heat butter until melted. Remove from heat. Stir in powdered sugar and vanilla until smooth. Stir in water, 1 tablespoon at a time, until desired consistency.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/4i5cnx1587672171.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=SamYg6IUGOI',
                'ingredients' => '[126,36,36,23,21,18,399,19,400,16,23,260,401,2]',
                'measurements' => '[356,163,314,132,5,4,232,357,149,132,61,314,187,358]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            152 => 
            array (
                'id' => 153,
                'tmdb_id' => 53027,
                'name' => 'Koshari',
                'category_id' => 4,
                'area_id' => 25,
            'instructions' => 'Cook the lentils. Bring lentils and 4 cups of water to a boil in a medium pot or saucepan over high heat. Reduce the heat to low and cook until lentils are just tender (15-17 minutes). Drain from water and season with a little salt. (Note: when the lentils are ready, they should not be fully cooked. They should be only par-cooked and still have a bite to them as they need to finish cooking with the rice).
Now, for the rice. Drain the rice from its soaking water. Combine the par-cooked lentils and the rice in the saucepan over medium-high heat with 1 tbsp cooking oil, salt, pepper, and coriander. Cook for 3 minutes, stirring regularly. Add warm water to cover the rice and lentil mixture by about 1 1/2 inches (you’ll probably use about 3 cups of water here). Bring to a boil; the water should reduce a bit. Now cover and cook until all the liquid has been absorbed and both the rice and lentils are well cooked through (about 20 minutes).  Keep covered and undisturbed for 5 minutes or so.
Now make the pasta. While the rice and lentils are cooking, make the pasta according to package instructions by adding the elbow pasta to boiling water with a dash of salt and a little oil. Cook until the pasta is al dente. Drain.
Cover the chickpeas and warm in the microwave briefly before serving.

Make the crispy onion topping. 

Sprinkle the onion rings with salt, then toss them in the flour to coat. Shake off excess flour.
In a large skillet, heat the cooking oil over medium-high heat, cook the onion rings, stirring often, until they turn a nice caramelized brown. Onions must be crispy, but not burned (15-20 minutes).',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/4er7mj1598733193.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=y0d2ZMZBW4Y',
                'ingredients' => '[402,155,32,217,257,53,21,135]',
                'measurements' => '[314,314,17,61,359,50,149,132]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            153 => 
            array (
                'id' => 154,
                'tmdb_id' => 52782,
                'name' => 'Lamb tomato and sweet spices',
                'category_id' => 12,
                'area_id' => 20,
                'instructions' => 'Use pickled vine leaves here, preserved in brine. Small delicate leaves are better than the large bristly ones but, if only large leaves are to hand, then trim them to roughly 12 by 12 cms so that you don\'t get too many layers of leaves around the filling. And remove any stalks. Drain the preserved leaves, immerse them in boiling water for 10 minutes and then leave to dry on a tea towel before use. 
Basmati rice with butter and pine nuts is an ideal accompaniment. Couscous is great, too. Serves four.
First make the filling. Put all the ingredients, apart from the tomatoes, in a bowl. Cut the tomatoes in half, coarsely grate into the bowl and discard the skins. Add half a teaspoon of salt and some black pepper, and stir. Leave on the side, or in the fridge, for up to a day. Before using, gently squeeze with your hands and drain away any juices that come out.
To make the sauce, heat the oil in a medium pan. Add the ginger and garlic, cook for a minute or two, taking care not to burn them, then add the tomato, lemon juice and sugar. Season, and simmer for 20 minutes.
While the sauce is bubbling away, prepare the vine leaves. Use any torn or broken leaves to line the base of a wide, heavy saucepan. Trim any leaves from the fennel, cut it vertically into 0.5cm-thick slices and spread over the base of the pan to cover completely.
Lay a prepared vine leaf (see intro) on a work surface, veiny side up. Put two teaspoons of filling at the base of the leaf in a 2cm-long by 1cm-wide strip. Fold the sides of the leaf over the filling, then roll it tightly from bottom to top, in a cigar shape. Place in the pan, seam down, and repeat with the remaining leaves, placing them tightly next to each other in lines or circles (in two layers if necessary).
Pour the sauce over the leaves (and, if needed, add water just to cover). Place a plate on top, to weigh the leaves down, then cover with a lid. Bring to a boil, reduce the heat and cook on a bare simmer for 70 minutes. Most of the liquid should evaporate. Remove from the heat, and leave to cool a little - they are best served warm. When serving, bring to the table in the pan - it looks great. Serve a few vine leaves and fennel slices with warm rice. Spoon the braising juices on top and garnish with coriander.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qtwtss1468572261.jpg',
                'tags' => '[15]',
                'youtube_url' => 'https://www.youtube.com/watch?v=vaZb1MnFBgA',
                'ingredients' => '[47,27,55,54,110,5,403,404,405,53,66,283,366,32,110,55,406,14,54]',
                'measurements' => '[75,360,361,362,75,5,363,50,42,87,364,75,75,365,30,154,366,366,94]',
                'created_at' => '2025-04-15 09:39:24',
                'updated_at' => '2025-04-15 09:39:24',
            ),
            154 => 
            array (
                'id' => 155,
                'tmdb_id' => 52805,
                'name' => 'Lamb Biryani',
                'category_id' => 12,
                'area_id' => 3,
                'instructions' => 'Grind the cashew, poppy seeds and cumin seeds into a smooth paste, using as little water as possible. Set aside. 

Deep fry the sliced onions when it is hot. Don’t overcrowd the oil. When the onions turn light brown, remove from oil and drain on paper towel. The fried onion will crisp up as it drains. Also fry the cashewnuts till golden brown. Set aside.

Wash the rice and soak in water for twenty minutes.
Meanwhile, take a big wide pan, add oil in medium heat, add the sliced onions, add the blended paste, to it add the green chillies, ginger garlic paste and garlic and fry for a minute.
Then add the tomatoes and sauté them well till they are cooked and not mushy.

Then to it add the red chilli powder, biryani powder, mint, coriander leaves and sauté them well.
Add the yogurt and mix well. I always move the skillet away from the heat when adding yogurt which prevents it from curdling.

Now after returning the skillet back to the stove, add the washed lamb and salt and ½ cup water and mix well. Cook for 1 hour and cook it covered in medium low heat or put it in a pressure cooker for 6 whistles. If the water is not drained totally, heat it by keeping it open.

Take another big pan, add thrice the cup of rice you use, and boil it. When it is boiling high, add the rice, salt and jeera and mix well. After 7 minutes exact or when the rice is 80% done. Switch off and drain the rice.

Now, the layering starts. To the lamb, pat and level it. Add the drained hot rice on the top of it. Garnish with fried onions, ghee, mint, coriander leaves and saffron dissolved in milk.

Cover the dish and bake in a 350f oven for 15 minutes or till the cooked but not mushy. Or cook in the stove medium heat for 12 minutes and lowest heat for 5 minutes. And switch off. Mix and serve hot!
Notes
1. If you are cooking in oven, do make sure to cook in a big oven safe pan and cover it tight and then keep in oven for the final step.
2. You can skip biryani masala if you don’t have and add just garam masala (1 tsp and red chilli powder – 3 tsp instead of 1 tsp)
3. If it is spicy in the end, squeeze some lemon, it will reduce the heat and enhance the flavors also.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xrttsx1487339558.jpg',
                'tags' => '[48,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=r7SYVSG5nxo',
                'ingredients' => '[290,407,206,70,408,55,112,321,397,319,283,409,206,99,14,73,125,396,57,410]',
                'measurements' => '[172,367,367,368,37,369,246,246,370,75,61,51,30,371,372,57,4,155,5,30]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            155 => 
            array (
                'id' => 156,
                'tmdb_id' => 52808,
                'name' => 'Lamb Rogan josh',
                'category_id' => 12,
                'area_id' => 3,
                'instructions' => '
Put the onions in a food processor and whizz until very finely chopped. Heat the oil in a large heavy-based pan, then fry the onion with the lid on, stirring every now and then, until it is really golden and soft. Add the garlic and ginger, then fry for 5 mins more.
Tip the curry paste, all the spices and the bay leaves into the pan, with the tomato purée. Stir well over the heat for about 30 secs, then add the meat and 300ml water. Stir to mix, turn down the heat, then add the yogurt.
Cover the pan, then gently simmer for 40-60 mins until the meat is tender and the sauce nice and thick. Serve scattered with coriander, with plain basmati or pilau rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vvstvq1487342592.jpg',
                'tags' => '[48,9,5]',
                'youtube_url' => 'https://www.youtube.com/watch?v=NZVo32n7iS8',
                'ingredients' => '[53,69,55,27,411,167,74,125,73,99,123,396,374,32]',
                'measurements' => '[373,257,70,374,75,37,32,375,60,4,30,376,103,216]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            156 => 
            array (
                'id' => 157,
                'tmdb_id' => 52821,
                'name' => 'Laksa King Prawn Noodles',
                'category_id' => 8,
                'area_id' => 2,
                'instructions' => 'Heat the oil in a medium saucepan and add the chilli. Cook for 1 min, then add the curry paste, stir and cook for 1 min more. Dissolve the stock cube in a large jug in 700ml boiling water, then pour into the pan and stir to combine. Tip in the coconut milk and bring to the boil.
Add the fish sauce and a little seasoning. Toss in the noodles and cook for a further 3-4 mins until softening. Squeeze in the lime juice, add the prawns and cook through until warm, about 2-3 mins. Scatter over some of the coriander.
Serve in bowls with the remaining coriander and lime wedges on top for squeezing over.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rvypwy1503069308.jpg',
                'tags' => '[56,50]',
                'youtube_url' => 'https://www.youtube.com/watch?v=OcarztU8cYo',
                'ingredients' => '[47,243,412,251,35,413,414,132,244,32]',
                'measurements' => '[30,107,377,32,378,37,121,379,81,380]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            157 => 
            array (
                'id' => 158,
                'tmdb_id' => 52843,
                'name' => 'Lamb Tagine',
                'category_id' => 12,
                'area_id' => 20,
                'instructions' => 'Heat the olive oil in a heavy-based pan and add the onion and carrot. Cook for 3- 4 mins until softened.

Add the diced lamb and brown all over. Stir in the garlic and all the spices and cook for a few mins more or until the aromas are released.

Add the honey and apricots, crumble in the stock cube and pour over roughly 500ml boiling water or enough to cover the meat. Give it a good stir and bring to the boil. Turn down to a simmer, put the lid on and cook for 1 hour.

Remove the lid and cook for a further 30 mins, then stir in the squash. Cook for 20 – 30 mins more until the squash is soft and the lamb is tender. Serve alongside rice or couscous and sprinkle with parsley and pine nuts, if using.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yuwtuu1511295751.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=bR5Cqu84S_k',
                'ingredients' => '[47,53,64,415,55,31,27,397,14,199,116,251,416,258,83]',
                'measurements' => '[84,107,101,47,99,33,33,381,5,253,121,32,382,383,159]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            158 => 
            array (
                'id' => 159,
                'tmdb_id' => 52844,
                'name' => 'Lasagne',
                'category_id' => 11,
                'area_id' => 11,
                'instructions' => 'Heat the oil in a large saucepan. Use kitchen scissors to snip the bacon into small pieces, or use a sharp knife to chop it on a chopping board. Add the bacon to the pan and cook for just a few mins until starting to turn golden. Add the onion, celery and carrot, and cook over a medium heat for 5 mins, stirring occasionally, until softened.
Add the garlic and cook for 1 min, then tip in the mince and cook, stirring and breaking it up with a wooden spoon, for about 6 mins until browned all over.
Stir in the tomato purée and cook for 1 min, mixing in well with the beef and vegetables. Tip in the chopped tomatoes. Fill each can half full with water to rinse out any tomatoes left in the can, and add to the pan. Add the honey and season to taste. Simmer for 20 mins.
Heat oven to 200C/180C fan/gas 6. To assemble the lasagne, ladle a little of the ragu sauce into the bottom of the roasting tin or casserole dish, spreading the sauce all over the base. Place 2 sheets of lasagne on top of the sauce overlapping to make it fit, then repeat with more sauce and another layer of pasta. Repeat with a further 2 layers of sauce and pasta, finishing with a layer of pasta.
Put the crème fraîche in a bowl and mix with 2 tbsp water to loosen it and make a smooth pourable sauce. Pour this over the top of the pasta, then top with the mozzarella. Sprinkle Parmesan over the top and bake for 25–30 mins until golden and bubbling. Serve scattered with basil, if you like.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wtsvxx1511296896.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=gfhfsBPt46s',
                'ingredients' => '[47,104,53,85,64,55,158,123,249,199,417,82,418,197,245]',
                'measurements' => '[253,4,85,384,87,243,47,77,286,253,47,106,97,113,83]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            159 => 
            array (
                'id' => 160,
                'tmdb_id' => 52877,
                'name' => 'Lamb and Potato pie',
                'category_id' => 12,
                'area_id' => 1,
                'instructions' => 'Dust the meat with flour to lightly coat.
Heat enough vegetable oil in a large saucepan to fill the base, and fry the onion and meat until lightly browned. Season with salt and pepper.
Add the carrots, stock and more seasoning to taste.
Bring to the boil, cover and reduce the heat to a simmer. Simmer for at least an hour or until the meat is tender. Take your time cooking the meat, the longer you leave it to cook, the better the flavour will be.
Preheat the oven to 180C/350F/Gas 4.
Add the drained potato cubes to the lamb.
Turn the mixture into a pie dish or casserole and cover with the shortcrust pastry. Make three slits in the top of the pastry to release any steam while cooking.
Brush with beaten egg and bake for about 40 minutes, until the pastry is golden brown.
Serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sxrpws1511555907.jpg',
                'tags' => '[16]',
                'youtube_url' => 'https://www.youtube.com/watch?v=NCyPaaUNYUk',
                'ingredients' => '[313,19,135,53,64,87,66,279,18]',
                'measurements' => '[47,77,44,86,123,38,47,353,112]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            160 => 
            array (
                'id' => 161,
                'tmdb_id' => 52884,
                'name' => 'Lancashire hotpot',
                'category_id' => 12,
                'area_id' => 1,
                'instructions' => 'Heat oven to 160C/fan 140C/gas 3. Heat some dripping or butter in a large shallow casserole dish, brown the lamb in batches, lift to a plate, then repeat with the kidneys.
Fry the onions and carrots in the pan with a little more dripping until golden. Sprinkle over the flour, allow to cook for a couple of mins, shake over the Worcestershire sauce, pour in the stock, then bring to the boil. Stir in the meat and bay leaves, then turn off the heat. Arrange the sliced potatoes on top of the meat, then drizzle with a little more dripping. Cover, then place in the oven for about 1½ hrs until the potatoes are cooked.
Remove the lid, brush the potatoes with a little more dripping, then turn the oven up to brown the potatoes, or finish under the grill for 5-8 mins until brown.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uttrxw1511637813.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=w6TS5J8YRA4',
                'ingredients' => '[2,396,419,70,64,10,175,218,62,66]',
                'measurements' => '[121,109,57,94,305,18,37,385,4,109]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            161 => 
            array (
                'id' => 162,
                'tmdb_id' => 52973,
                'name' => 'Leblebi Soup',
                'category_id' => 4,
                'area_id' => 21,
                'instructions' => 'Heat the oil in a large pot. Add the onion and cook until translucent.
Drain the soaked chickpeas and add them to the pot together with the vegetable stock. Bring to the boil, then reduce the heat and cover. Simmer for 30 minutes.
In the meantime toast the cumin in a small ungreased frying pan, then grind them in a mortar. Add the garlic and salt and pound to a fine paste.
Add the paste and the harissa to the soup and simmer until the chickpeas are tender, about 30 minutes.
Season to taste with salt, pepper and lemon juice and serve hot.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/x2fw9e1560460636.jpg',
                'tags' => '[32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=BgRifcCwinY',
                'ingredients' => '[47,53,257,87,31,55,21,255,102,132]',
                'measurements' => '[25,386,79,387,5,58,17,5,95,142]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            162 => 
            array (
                'id' => 163,
                'tmdb_id' => 52987,
                'name' => 'Lasagna Sandwiches',
                'category_id' => 11,
                'area_id' => 4,
                'instructions' => '1. In a small bowl, combine the first four ingredients; spread on four slices of bread. Layer with bacon, tomato and cheese; top with remaining bread.

2. In a large skillet or griddle, melt 2 tablespoons butter. Toast sandwiches until lightly browned on both sides and cheese is melted, adding butter if necessary.

Nutrition Facts
1 sandwich: 445 calories, 24g fat (12g saturated fat), 66mg cholesterol, 1094mg sodium, 35g carbohydrate (3g sugars, 2g fiber), 21g protein.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xr0n4r1576788363.jpg',
                'tags' => '[62]',
                'youtube_url' => '',
                'ingredients' => '[228,357,365,21,41,104,130,315,2]',
                'measurements' => '[163,25,326,273,64,64,64,388,389]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            163 => 
            array (
                'id' => 164,
                'tmdb_id' => 53009,
                'name' => 'Lamb and Lemon Souvlaki',
                'category_id' => 12,
                'area_id' => 23,
            'instructions' => 'Pound the garlic with sea salt in a pestle and mortar (or use a small food processor), until the garlic forms a paste. Whisk together the oil, lemon juice, zest, dill and garlic. Mix in the lamb and combine well. Cover and marinate for at least 2 hrs or overnight in the fridge. If you’re going to use bamboo skewers, soak them in cold water.

If you’ve prepared the lamb the previous day, take it out of the fridge 30 mins before cooking. Thread the meat onto the soaked or metal skewers. Heat the grill to high or have a hot griddle pan or barbecue ready. Cook the skewers for 2-3 mins on each side, basting with the remaining marinade. Heat the pitta or flatbreads briefly, then stuff with the souvlaki. Add Greek salad (see \'Goes well with\', right) and Tzatziki (below), if you like.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rjhf741585564676.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=krR4rhjR75Y',
                'ingredients' => '[55,261,47,109,189,415,333]',
                'measurements' => '[154,37,182,390,117,98,12]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            164 => 
            array (
                'id' => 165,
                'tmdb_id' => 53010,
                'name' => 'Lamb Tzatziki Burgers',
                'category_id' => 12,
                'area_id' => 23,
                'instructions' => 'Tip the bulghar into a pan, cover with water and boil for 10 mins. Drain really well in a sieve, pressing out any excess water.

To make the tzatziki, squeeze and discard the juice from the cucumber, then mix into the yogurt with the chopped mint and a little salt.

Work the bulghar into the lamb with the spices, garlic (if using) and seasoning, then shape into 4 burgers. Brush with a little oil and fry or barbecue for about 5 mins each side until cooked all the way through. Serve in the buns (toasted if you like) with the tzatziki, tomatoes, onion and a few mint leaves.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/k420tj1585565244.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=s7_TF4ZHjPc',
                'ingredients' => '[420,405,31,32,167,55,47,421,156,374,112]',
                'measurements' => '[18,47,5,5,5,222,137,60,114,102,25]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            165 => 
            array (
                'id' => 166,
                'tmdb_id' => 53083,
            'name' => 'Lamb Pilaf (Plov)',
                'category_id' => 12,
                'area_id' => 6,
                'instructions' => 'Place the raisins and prunes into a small bowl and pour over enough water to cover. Add lemon juice and let soak for at least 1 hour. Drain. Roughly chop the prunes.

Meanwhile, heat the butter in a large pan, add the onion, and cook for 5 minutes. Add cubed lamb, ground lamb, and crushed garlic cloves. Fry for 5 minutes, stirring constantly until browned.

Pour 2/3 cup (150 milliliters) of stock into the pan. Bring to a boil, then lower the heat, cover, and simmer for 1 hour, or until the lamb is tender.

Add the remaining stock and bring to a boil. Add rinsed long-grain white rice and a large pinch of saffron. Stir, then cover, and simmer for 15 minutes, or until the rice is tender.

Add the drained raisins, drained chopped prunes, and salt and pepper to taste. Heat through for a few minutes, then turn out onto a warmed serving dish and garnish with sprigs of flat-leaf parsley.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/kos9av1699014767.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=rllQsUw1hFQ',
                'ingredients' => '[396,422,110,2,53,396,55,87,155,397,83]',
                'measurements' => '[113,7,117,25,140,353,154,240,61,95,138]',
                'created_at' => '2025-04-15 09:39:25',
                'updated_at' => '2025-04-15 09:39:25',
            ),
            166 => 
            array (
                'id' => 167,
                'tmdb_id' => 52777,
                'name' => 'Mediterranean Pasta Salad',
                'category_id' => 8,
                'area_id' => 11,
                'instructions' => 'Bring a large saucepan of salted water to the boil
Add the pasta, stir once and cook for about 10 minutes or as directed on the packet.
Meanwhile, wash the tomatoes and cut into quarters. Slice the olives. Wash the basil.
Put the tomatoes into a salad bowl and tear the basil leaves over them. Add a tablespoon of olive oil and mix.
When the pasta is ready, drain into a colander and run cold water over it to cool it quickly.
Toss the pasta into the salad bowl with the tomatoes and basil.
Add the sliced olives, drained mozzarella balls, and chunks of tuna. Mix well and let the salad rest for at least half an hour to allow the flavours to mingle.
Sprinkle the pasta with a generous grind of black pepper and drizzle with the remaining olive oil just before serving.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wvqpwt1468339226.jpg',
                'tags' => '[39,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=e52IL8zYmaE',
                'ingredients' => '[418,423,424,425,426,427,428,21,102]',
                'measurements' => '[391,392,171,393,185,394,391,152,152]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            167 => 
            array (
                'id' => 168,
                'tmdb_id' => 52827,
                'name' => 'Massaman Beef curry',
                'category_id' => 3,
                'area_id' => 28,
                'instructions' => 'Heat oven to 200C/180C fan/gas 6, then roast the peanuts on a baking tray for 5 mins until golden brown. When cool enough to handle, roughly chop. Reduce oven to 180C/160C fan/gas 4.
Heat 2 tbsp coconut cream in a large casserole dish with a lid. Add the curry paste and fry for 1 min, then stir in the beef and fry until well coated and sealed. Stir in the rest of the coconut with half a can of water, the potatoes, onion, lime leaves, cinnamon, tamarind, sugar, fish sauce and most of the peanuts. Bring to a simmer, then cover and cook for 2 hrs in the oven until the beef is tender.
Sprinkle with sliced chilli and the remaining peanuts, then serve straight from the dish with jasmine rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tvttqv1504640475.jpg',
                'tags' => '[48]',
                'youtube_url' => 'https://www.youtube.com/watch?v=mVxgZSCU9_g',
                'ingredients' => '[392,180,429,67,66,53,132,74,34,275,413,393,430]',
                'measurements' => '[276,378,257,395,396,397,398,32,30,399,30,400,12]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            168 => 
            array (
                'id' => 169,
                'tmdb_id' => 52864,
                'name' => 'Mushroom & Chestnut Rotolo',
                'category_id' => 4,
                'area_id' => 1,
                'instructions' => 'Soak the dried mushrooms in 350ml boiling water and set aside until needed. Blitz ¾ of the chestnuts with 150ml water until creamy. Roughly chop the remaining chestnuts.
Heat 2 tbsp olive oil in a large non-stick frying pan. Fry the shallots with a pinch of salt until softened, then add the garlic, chopped chestnuts and rosemary, and fry for 2 mins more. Add the wild mushrooms, 2 tbsp oil and some seasoning. Cook for 3 mins until they begin to soften. Drain and roughly chop the dried mushrooms (reserve the soaking liquid), then add those too, along with the soy sauce, and fry for 2 mins more.
Whisk the wine, reserved mushroom liquid and chestnut cream together to create a sauce. Season, then add half to the mushroom mixture in the pan and cook for 1 min until the sauce becomes glossy. Remove and discard the rosemary sprigs, then set the mixture aside.
Heat oven to 180C/160C fan/gas 4. Bring a large pan of salted water to the boil and get a large bowl of ice water ready. Drop the lasagne sheets into the boiling water for 2 mins or until pliable and a little cooked, then immediately plunge them into the cold water. Using your fingers, carefully separate the sheets and transfer to a clean tea towel. Spread a good spoonful of the sauce on the bottom two thirds of each sheet, then, rolling away from yourself, roll up the shorter ends. Cut each roll in half, then position the rolls of pasta cut-side up in a pie dish that you are happy to serve from at the table. If you have any mushroom sauce remaining after you’ve rolled up all the sheets, simply push it into some of the exposed rolls of pasta.
Pour the rest of the sauce over the top of the pasta, then bake for 10 mins or until the pasta no longer has any resistance when tested with a skewer.
Meanwhile, put the breadcrumbs, the last 2 tbsp olive oil, sage leaves and some seasoning in a bowl, and toss everything together. Scatter the rotolo with the crumbs and sage, then bake for another 10 mins, until the top is golden and the sage leaves are crispy. Leave to cool for 10 mins to allow the pasta to absorb the sauce, then drizzle with a little truffle oil, if you like, before taking your dish to the table.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ssyqwr1511451678.jpg',
                'tags' => '[42,41]',
                'youtube_url' => 'https://www.youtube.com/watch?v=GNN7_ZSJ5YE',
                'ingredients' => '[45,431,26,55,61,432,133,214,417,150,388,433]',
                'measurements' => '[10,401,57,176,108,47,84,402,122,257,403,12]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            169 => 
            array (
                'id' => 170,
                'tmdb_id' => 52865,
                'name' => 'Matar Paneer',
                'category_id' => 4,
                'area_id' => 3,
                'instructions' => 'Heat the oil in a frying pan over high heat until it’s shimmering hot. Add the paneer, then turn the heat down a little. Fry until it starts to brown at the edges, then turn it over and brown on each side – the paneer will brown faster than you think, so don’t walk away. Remove the paneer from the pan and drain on kitchen paper.
Put the ginger, cumin, turmeric, ground coriander and chilli in the pan, and fry everything for 1 min. Add the tomatoes, mashing them with the back of a spoon and simmer everything for 5 mins until the sauce smells fragrant. Add a splash of water if it’s too thick. Season well. Add the peas and simmer for a further 2 mins, then stir in the paneer and sprinkle over the garam masala. Divide between two bowls, top with coriander leaves and serve with naan bread, roti or rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xxpqsy1511452222.jpg',
                'tags' => '[48,42]',
                'youtube_url' => 'https://www.youtube.com/watch?v=wlseYNqwLNs',
                'ingredients' => '[69,434,27,31,30,32,56,130,332,211,32,435]',
                'measurements' => '[77,196,4,5,5,5,32,147,81,5,404,12]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            170 => 
            array (
                'id' => 171,
                'tmdb_id' => 52876,
                'name' => 'Minced Beef Pie',
                'category_id' => 3,
                'area_id' => 1,
                'instructions' => 'Preheat the oven to 200C/400F/Gas 6.
Heat the oil in a deep frying pan and fry the beef mince for 4-5 minutes, breaking it up with a wooden spoon as it browns.
Add the onion and cook for 2-3 minutes, then stir in the tomato purée and cook for 2-3 more minutes. Stir in the flour and cook for a further minute, then add the chopped mushrooms, the stout or beef stock and a couple of dashes of Worcestershire sauce. Bring to the boil, then reduce the heat, cover the pan with a lid and leave to simmer for 20 minutes. Set aside and leave to cool, then turn the meat mixture into a one litre pie dish.
Roll out the pastry on a floured work surface until it is slightly larger than the pie dish. Gently drape the pastry over the dish, pressing firmly onto the edges. Trim, then shape the edges into a fluted shape.
Cut some leaf shapes out of the pastry trimmings and decorate the top of the pie, sticking them to the pastry with the beaten egg yolk.
Make three or four slits in the pastry to allow the steam to escape, then brush the pie with the rest of the beaten egg yolk and bake in the oven for 20-25 minutes, or until golden-brown.
To serve, slice into wedges.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xwutvy1511555540.jpg',
                'tags' => '[16,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=QY47h-uqq5g',
                'ingredients' => '[135,158,53,123,10,45,63,175,279,51]',
                'measurements' => '[25,47,140,77,278,116,288,44,42,32]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            171 => 
            array (
                'id' => 172,
                'tmdb_id' => 52880,
                'name' => 'McSinghs Scotch pie',
                'category_id' => 12,
                'area_id' => 1,
            'instructions' => 'Heat a large frying pan and toast the cumin seeds for a few minutes, then set aside. Heat the oil in the same pan and fry the onion, garlic, chilli, pepper and a good pinch of salt for around eight minutes, until there is no moisture left. Remove from the heat, stir in the toasted cumin seeds, ground mace (or nutmeg) and ground coriander. Leave to cool.
In a large bowl mix together the minced lamb, white pepper, fresh coriander, and the cooled spiced onion mixture until combined. Set aside, covered, in the fridge.
Preheat the oven to 200C/400F/Gas 6 and generously grease a 20cm/8in diameter loose-bottomed or springform round cake tin with lard.
To make the pastry, sift the flour and salt in a large bowl and make a well in the centre.
Put the milk, lard and 90ml/3fl oz of water in a saucepan and heat gently. When the lard has melted, increase the heat and bring to the boil.
Pour the boiling liquid into the flour, and use a wooden spoon to combine until cool enough to handle. Bring together into a ball.
Dust a work surface with flour and, working quickly, knead the dough briefly – it will be soft and moist. Set aside a third of the pastry and roll the rest out on a well-floured surface. Line the pie dish with the pastry, pressing it right up the sides until it pokes just over the top of the tin.
Add the filling into the pastry-lined tin bit by bit. As you reach the top, form a slight peak. Roll out the reserved pastry and top the pie with it. Pinch the edges to seal and trim the excess. Poke a hole in the top of the pie and insert a small tube made from aluminium foil to allow steam to escape.
Brush the top of the pie with a little beaten egg yolk, and bake in the preheated oven for 30 minutes (put a tray on the shelf below to catch any drips). Then reduce the temperature to 160C/325F/Gas 3 and cook for a further 1¼ hours until golden-brown. Leave to cool completely before refrigerating for two hours, or overnight.
Run a knife around the edge of the pie, remove from the tin and serve with chutneys, salads or pickles.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vssrtx1511557680.jpg',
                'tags' => '[16]',
                'youtube_url' => 'https://www.youtube.com/watch?v=1nArqhRyszw',
                'ingredients' => '[31,84,151,28,56,131,44,32,405,102,32,10,21,16,346,51]',
                'measurements' => '[37,117,129,21,239,85,5,37,69,5,20,405,33,406,81,407]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            172 => 
            array (
                'id' => 173,
                'tmdb_id' => 52900,
                'name' => 'Madeira Cake',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Pre-heat the oven to 180C/350F/Gas 4. Grease an 18cm/7in round cake tin, line the base with greaseproof paper and grease the paper.
Cream the butter and sugar together in a bowl until pale and fluffy. Beat in the eggs, one at a time, beating the mixture well between each one and adding a tablespoon of the flour with the last egg to prevent the mixture curdling.
Sift the flour and gently fold in, with enough milk to give a mixture that falls slowly from the spoon. Fold in the lemon zest.
Spoon the mixture into the prepared tin and lightly level the top. Bake on the middle shelf of the oven for 30-40 minutes, or until golden-brown on top and a skewer inserted into the centre comes out clean.
Remove from the oven and set aside to cool in the tin for 10 minutes, then turn it out on to a wire rack and leave to cool completely.
To serve, decorate the cake with the candied peel.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/urtqut1511723591.jpg',
                'tags' => '[19,63,2,14]',
                'youtube_url' => 'https://www.youtube.com/watch?v=-YDh4WEmK_E',
                'ingredients' => '[2,5,18,113,16,109,326]',
                'measurements' => '[100,100,57,79,20,197,112]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            173 => 
            array (
                'id' => 174,
                'tmdb_id' => 52927,
                'name' => 'Montreal Smoked Meat',
                'category_id' => 3,
                'area_id' => 8,
                'instructions' => 'To make the cure, in a small bowl mix together salt, pink salt, black pepper, coriander, sugar, bay leaf, and cloves. Coat entire brisket with the cure and place in an extra-large resealable plastic bag. Place in the coldest part of the refrigerator and cure for 4 days, flipping brisket twice a day.
Remove brisket from bag and wash as much cure off as possible under cold running water. Place brisket in a large container and fill with water and let soak for 2 hours, replacing water every 30 minutes. Remove from water and pat dry with paper towels.
To make the rub, mix together black pepper, coriander, paprika, garlic powder, onion powder, dill weed, mustard, celery seed, and crushed red papper in a small bowl. Coat entire brisket with the rub.
Fire up smoker or grill to 225 degrees, adding chunks of smoking wood chunks when at temperature. When wood is ignited and producing smoke, place brisket in, fat side up, and smoke until an instant read thermometer registers 165 degrees when inserted into thickest part of the brisket, about 6 hours.
Transfer brisket to large roasting pan with V-rack. Place roasting pan over two burners on stovetop and fill with 1-inch of water. Bring water to a boil over high heat, reduce heat to medium, cover roasting pan with aluminum foil, and steam brisket until an instant read thermometer registers 180 degrees when inserted into thickest part of the meat, 1 to 2 hours, adding more hot water as needed.
Transfer brisket to cutting board and let cool slightly. Slice and serve, preferably on rye with mustard.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uttupv1511815050.jpg',
                'tags' => '[22,38,64]',
                'youtube_url' => 'https://www.youtube.com/watch?v=g5oCDoyxbBk',
                'ingredients' => '[59,21,182,32,23,99,73,182,32,167,55,53,189,46,308,213]',
                'measurements' => '[32,20,20,117,117,5,5,20,117,117,117,117,117,5,117,5]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            174 => 
            array (
                'id' => 175,
                'tmdb_id' => 52947,
                'name' => 'Ma Po Tofu',
                'category_id' => 3,
                'area_id' => 10,
                'instructions' => 'Add a small pinch of salt and sesame oil to minced beef. Mix well and set aside.
Mix 1 tablespoon of cornstarch with 2 and ½ tablespoons of water in a small bowl to make water starch.
Cut tofu into square cubes (around 2cms). Bring a large amount of water to a boil and then add a pinch of salt. Slide the tofu in and cook for 1 minute. Move out and drain.
Get a wok and heat up around 2 tablespoons of oil, fry the minced meat until crispy. Transfer out beef out and leave the oil in.
Fry doubanjiang for 1 minute over slow fire and then add garlic, scallion white, ginger and fermented black beans to cook for 30 seconds until aroma. Then mix pepper flakes in.
Add water to the seasonings and bring to boil over high fire. Gently slide the tofu cubes. Add light soy sauce and beef.Slow the heat after boiling and then simmer for 6-8 minutes. Then add chopped garlic greens.
Stir the water starch and then pour half of the mixture to the simmering pot. Wait for around 30 seconds and then pour the other half. You can slightly taste the tofu and add pinch of salt if not salty enough. By the way, if you feel it is too spicy, add some sugar can milder the taste. But be carefully as the broth is very hot at this point.
Transfer out when almost all the seasonings stick to tofu cubes. Sprinkle Szechuan peppercorn powder (to taste)and chopped garlic greens if using.
Serve immediately with steamed rice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1525874812.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=IhwPQL9dFYc',
                'ingredients' => '[372,158,136,436,437,102,21,438,133,36,47,439,176,55,27,36,134]',
                'measurements' => '[353,121,326,162,17,117,17,17,117,106,25,101,60,243,305,389,117]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            175 => 
            array (
                'id' => 176,
                'tmdb_id' => 52968,
            'name' => 'Mbuzi Choma (Roasted Goat)',
                'category_id' => 13,
                'area_id' => 27,
                'instructions' => '1. Steps for the Meat: 
Roast meat over medium heat for 50 minutes and salt it as you turn it.

2. Steps for Ugali:
Bring the water and salt to a boil in a heavy-bottomed saucepan. Stir in the cornmeal slowly, letting it fall through the fingers of your hand.

3. Reduce heat to medium-low and continue stirring regularly, smashing any lumps with a spoon, until the mush pulls away from the sides of the pot and becomes very thick, about 10 minutes.

4.Remove from heat and allow to cool.

5. Place the ugali into a large serving bowl. Wet your hands with water, form a ball and serve.

6. Steps for Kachumbari: Mix the tomatoes, onions, chili and coriander leaves in a bowl.

7. Serve and enjoy!

',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/cuio7s1555492979.jpg',
                'tags' => '[43,7]',
                'youtube_url' => '',
                'ingredients' => '[440,106,54,21,53,56,58]',
                'measurements' => '[304,304,4,95,32,32,171]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            176 => 
            array (
                'id' => 177,
                'tmdb_id' => 52991,
                'name' => 'Mince Pies',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'To make the pastry, rub 225g cold, diced butter into 350g plain flour, then mix in 100g golden caster sugar and a pinch of salt.

Combine the pastry into a ball – don’t add liquid – and knead it briefly. The dough will be fairly firm, like shortbread dough. You can use the dough immediately, or chill for later.

Preheat the oven to 200C/gas 6/fan 180C. Line 18 holes of two 12-hole patty tins, by pressing small walnut-sized balls of pastry into each hole.

Spoon 280g mincemeat into the pies.

Take slightly smaller balls of pastry than before and pat them out between your hands to make round lids, big enough to cover the pies. 

Top the pies with their lids, pressing the edges gently together to seal – you don’t need to seal them with milk or egg as they will stick on their own. (The pies may now be frozen for up to 1 month).

Beat 1 small egg and brush the tops of the pies. Bake for 20 mins until golden. Leave to cool in the tin for 5 mins, then remove to a wire rack.

To serve, lightly dust with icing sugar.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qe8pf51576795532.jpg',
                'tags' => '[44]',
                'youtube_url' => 'https://www.youtube.com/watch?v=PnXft7lQNJE',
                'ingredients' => '[2,10,5,441,137,118]',
                'measurements' => '[196,122,121,242,284,83]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            177 => 
            array (
                'id' => 178,
                'tmdb_id' => 53006,
                'name' => 'Moussaka',
                'category_id' => 3,
                'area_id' => 23,
                'instructions' => 'Heat the grill to high. Brown the beef in a deep ovenproof frying pan over a high heat for 5 mins. Meanwhile, prick the aubergine with a fork, then microwave on High for 3-5 mins until soft. Mix the yogurt, egg and parmesan together, then add a little seasoning.

Stir the tomatoes, purée and potatoes in with the beef with some seasoning and heat through. Smooth the surface of the beef mixture with the back of a spoon, then slice the cooked aubergine and arrange on top. Pour the yogurt mixture over the aubergines, smooth out evenly, then grill until the topping has set and turned golden.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ctg8jd1585563097.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=8U_29i9Qp5U',
                'ingredients' => '[67,52,374,137,347,130,123,66]',
                'measurements' => '[47,50,81,293,20,42,182,122]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            178 => 
            array (
                'id' => 179,
                'tmdb_id' => 53029,
                'name' => 'Mulukhiyah',
                'category_id' => 3,
                'area_id' => 25,
                'instructions' => 'Saute the onions in the 3-4 tablespoons olive oil
Add the beef cubes or the chicken cutlets, sear for 3-4 min on each side
Add 1 liter of water or just enough to cover the meat
Cook over medium heat until the meat is done (I usually do this in the pressure cooker and press them for 5 min)

Add the frozen mulukhyia and stir until it thaws completely and then comes to a boil

In another pan add the 1/4 to 1/2 cup of olive oil and the cloves of garlic and cook over medium low heat until you can smell the garlic (don’t brown it, it will become bitter)

Add the oil and garlic to the mulukhyia and lower the heat and simmer for 5-10 minutes
Add salt to taste

Serve with a generous amount of lemon juice.

You can serve it with some short grain rice or some pita bread',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/x372ug1598733932.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=vWc5JzgAkIQ',
                'ingredients' => '[442,53,67,21,36,28,47]',
                'measurements' => '[286,140,9,5,408,32,132]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            179 => 
            array (
                'id' => 180,
                'tmdb_id' => 53038,
                'name' => 'Mustard champ',
                'category_id' => 7,
                'area_id' => 15,
                'instructions' => 'STEP 1
Boil the potatoes for 15 mins or until tender. Drain, then mash.

STEP 2
Heat the milk and half the butter in the corner of the pan, then beat into the mash, along with the wholegrain mustard.

STEP 3
Gently fry the spring onions in the remaining butter for 2 mins until just soft but still a perky green. Fold into the mash and serve. Great with gammon or to top a fish pie.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/o7p9581608589317.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_iKllHSC978',
                'ingredients' => '[66,16,2,65,176,176]',
                'measurements' => '[69,13,113,25,409,409]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            180 => 
            array (
                'id' => 181,
                'tmdb_id' => 53047,
                'name' => 'Moroccan Carrot Soup',
                'category_id' => 4,
                'area_id' => 20,
                'instructions' => 'Step 1
Preheat oven to 180° C.
Step 2
Combine carrots, onion, garlic, cumin seeds, coriander seeds, salt and olive oil in a bowl and mix well. Transfer on a baking tray.
Step 3
Put the baking tray in preheated oven and roast for 10-12 minutes or till carrots soften. Remove from heat and cool.
Step 4
Grind the baked carrot mixture along with some water to make a smooth paste and strain in a bowl.
Step 5
Heat the carrot mixture in a non-stick pan. Add two cups of water and bring to a boil. Add garam masala powder and mix. Add salt and mix well.
Step 6
Remove from heat, add lemon juice and mix well.
Step 7
Serve hot.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/jcr46d1614763831.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=7tDWOpnIhok',
                'ingredients' => '[64,53,28,31,32,47,211,110]',
                'measurements' => '[270,86,60,5,17,117,273,5]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            181 => 
            array (
                'id' => 182,
                'tmdb_id' => 53048,
                'name' => 'Mee goreng mamak',
                'category_id' => 8,
                'area_id' => 2,
                'instructions' => 'Heat oil in a pan at medium heat. Then, add peanuts, dried chilies, dried shrimps and dhal. Fry the aromatics until fragrant. Remove from pan and leave aside.

Blend fried ingredients with tamarind paste and water until fine. Then, sauté the blended ingredients in oil heated over low heat. Continue cooking until the oil separates from the paste and turns a darker shade.

Skin and cut potatoes into small chunks and boil them in a pot of water until knife-tender. Once ready, remove them from the pot and leave aside. Discard water.

Slice onion and fried tofu, mince garlic, cut some cabbage and Chinese flowering cabbage (choi sam). Prepare prawn fritters and cut them. Boil noodles to soften them if bought dried. Also mix black soy sauce with water.

To fry one portion of mee goreng mamak, heat oil and add 1/4 of the following ingredients in this order: garlic, onion, paste. Sauté until fragrant. Optionally, add prawns.

Add in 1/4 amount of tofu, boiled potatoes, cabbage, Chinese flowering cabbage and prawn fritters. Sauté for another 30 seconds.

Add noodles to the wok. Add 3 tablespoons of dark soy sauce mixture. Mix evenly for the next 1 minute. Then, move the noodles to the side of the wok. Stir in an egg. Garnish with a slice of lime and slices of green chilies. To cook another plate of noodles, repeat from step 5 onwards.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xquakq1619787532.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=pOJEmDBgtSk',
                'ingredients' => '[392,393,340,17,36,34,66,151,28,169,443,372,133,139,137]',
                'measurements' => '[113,410,411,143,124,326,79,4,60,10,10,32,117,60,32]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            182 => 
            array (
                'id' => 183,
                'tmdb_id' => 53059,
                'name' => 'Mushroom soup with buckwheat',
                'category_id' => 7,
                'area_id' => 16,
                'instructions' => 'Chop the onion and garlic, slice the mushrooms and wash the buckwheat. Heat the oil and lightly sauté the onion. Add the mushrooms and the garlic and continue to sauté. Add the salt, vegetable seasoning, buckwheat and the bay leaf and cover with water. Simmer gently and just before it is completely cooked, add pepper, sour cream mixed with flour, the chopped parsley and vinegar to taste.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1ngcbf1628770793.jpg',
                'tags' => '[31,32]',
                'youtube_url' => 'https://www.youtube.com/watch?v=M1ok7mG9-Qc',
                'ingredients' => '[45,190,135,53,55,99,251,228,164,83]',
                'measurements' => '[81,113,182,175,154,32,80,412,44,413]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            183 => 
            array (
                'id' => 184,
                'tmdb_id' => 53086,
                'name' => 'Migas',
                'category_id' => 6,
                'area_id' => 29,
                'instructions' => 'Crumble the bread into small pieces. Sprinkle with cold water, cover with a damp cloth and leave for 30 minutes.
Heat 2 tsp of olive oil in a deep pan. Add the garlic cloves separated, skins on; just make a small cut with a knife to open them and keep frying for 5 minutes. Set the garlic aside.
In the same oil, where we fried everything, simmer the bread, stirring constantly for 15 minutes and add a grinding of black pepper.
Add the garlic, continue stirring for about 20 minutes. It will be ready when the bread is soft and golden.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xd9aj21740432378.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=GSvFVBpqMKI',
                'ingredients' => '[41,47,55,152]',
                'measurements' => '[50,414,415,416]',
                'created_at' => '2025-04-15 09:39:26',
                'updated_at' => '2025-04-15 09:39:26',
            ),
            184 => 
            array (
                'id' => 185,
                'tmdb_id' => 52851,
                'name' => 'Nutty Chicken Curry',
                'category_id' => 2,
                'area_id' => 3,
                'instructions' => 'Finely slice a quarter of the chilli, then put the rest in a food processor with the ginger, garlic, coriander stalks and one-third of the leaves. Whizz to a rough paste with a splash of water if needed.
Heat the oil in a frying pan, then quickly brown the chicken chunks for 1 min. Stir in the paste for another min, then add the peanut butter, stock and yogurt. When the sauce is gently bubbling, cook for 10 mins until the chicken is just cooked through and sauce thickened. Stir in most of the remaining coriander, then scatter the rest on top with the chilli, if using. Eat with rice or mashed sweet potato.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yxsurp1511304301.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=nSQNfZxOdeU',
                'ingredients' => '[243,27,55,32,69,194,24,218,374]',
                'measurements' => '[50,188,50,409,30,60,249,103,102]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            185 => 
            array (
                'id' => 186,
                'tmdb_id' => 52858,
                'name' => 'New York cheesecake',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Position an oven shelf in the middle of the oven. Preheat the oven to fan 160C/conventional 180C/gas 4. Line the base of a 23cm springform cake tin with parchment paper. For the crust, melt the butter in a medium pan. Stir in the biscuit crumbs and sugar so the mixture is evenly moistened. Press the mixture into the bottom of the pan and bake for 10 minutes. Cool on a wire rack while preparing the filling.
For the filling, increase the oven temperature to fan 200C/conventional 240C/gas 9. In a table top mixer fitted with the paddle attachment, beat the soft cheese at medium-low speed until creamy, about 2 minutes. With the mixer on low, gradually add the sugar, then the flour and a pinch of salt, scraping down the sides of the bowl and the paddle twice.
Swap the paddle attachment for the whisk. Continue by adding the vanilla, lemon zest and juice. Whisk in the eggs and yolk, one at a time, scraping the bowl and whisk at least twice. Stir the 284ml carton of soured cream until smooth, then measure 200ml/7fl oz (just over 3⁄4 of the carton). Continue on low speed as you add the measured soured cream (reserve the rest). Whisk to blend, but don\'t over-beat. The batter should be smooth, light and somewhat airy.
Brush the sides of the springform tin with melted butter and put on a baking sheet. Pour in the filling - if there are any lumps, sink them using a knife - the top should be as smooth as possible. Bake for 10 minutes. Reduce oven temperature to fan 90C/conventional 110C/gas 1⁄4 and bake for 25 minutes more. If you gently shake the tin, the filling should have a slight wobble. Turn off the oven and open the oven door for a cheesecake that\'s creamy in the centre, or leave it closed if you prefer a drier texture. Let cool in the oven for 2 hours. The cheesecake may get a slight crack on top as it cools.
Combine the reserved soured cream with the 142ml carton, the sugar and lemon juice for the topping. Spread over the cheesecake right to the edges. Cover loosely with foil and refrigerate for at least 8 hours or overnight.
Run a round-bladed knife around the sides of the tin to loosen any stuck edges. Unlock the side, slide the cheesecake off the bottom of the tin onto a plate, then slide the parchment paper out from underneath.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/swttys1511385853.jpg',
                'tags' => '[14,18,4,19,13]',
                'youtube_url' => 'https://www.youtube.com/watch?v=tspdJ6hxqnc',
                'ingredients' => '[2,228,23,262,5,10,110,18,228,228,5,110]',
                'measurements' => '[276,67,80,109,79,20,417,62,288,103,30,37]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            186 => 
            array (
                'id' => 187,
                'tmdb_id' => 52924,
                'name' => 'Nanaimo Bars',
                'category_id' => 1,
                'area_id' => 8,
                'instructions' => 'Start by making the biscuit base. In a bowl, over a pan of simmering water, melt the butter with the sugar and cocoa powder, stirring occasionally until smooth. Whisk in the egg for 2 to 3 mins until the mixture has thickened. Remove from heat and mix in the biscuit crumbs, coconut and almonds if using, then press into the base of a lined 20cm square tin. Chill for 10 mins.
For the middle layer, make the custard icing; whisk together the butter, cream and custard powder until light and fluffy, then gradually add the icing sugar until fully incorporated. Spread over the bottom layer and chill in the fridge for at least 10 mins until the custard is no longer soft.
Melt the chocolate and butter together in the microwave, then spread over the chilled bars and put back in the fridge. Leave until the chocolate has fully set (about 2 hrs). Take the mixture out of the tin and slice into squares to serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vwuprt1511813703.jpg',
                'tags' => '[21,38,18]',
                'youtube_url' => 'https://www.youtube.com/watch?v=MMrE4I1ZtWo',
                'ingredients' => '[295,5,268,137,1,444,114,2,43,445,118,266,2]',
                'measurements' => '[97,113,143,293,418,121,113,121,182,20,79,81,113]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            187 => 
            array (
                'id' => 188,
                'tmdb_id' => 53051,
                'name' => 'Nasi lemak',
                'category_id' => 8,
                'area_id' => 2,
                'instructions' => 'In a medium saucepan over medium heat, stir together coconut milk, water, ground ginger, ginger root, salt, bay leaf, and rice. Cover, and bring to a boil. Reduce heat, and simmer for 20 to 30 minutes, or until done.

Step 2
Place eggs in a saucepan, and cover with cold water. Bring water to a boil, and immediately remove from heat. Cover, and let eggs stand in hot water for 10 to 12 minutes. Remove eggs from hot water, cool, peel and slice in half. Slice cucumber.

Step 3
Meanwhile, in a large skillet or wok, heat 1 cup vegetable oil over medium-high heat. Stir in peanuts and cook briefly, until lightly browned. Remove peanuts with a slotted spoon and place on paper towels to soak up excess grease. Return skillet to stove. Stir in the contents of one package anchovies; cook briefly, turning, until crisp. Remove with a slotted spoon and place on paper towels. Discard oil. Wipe out skillet.

Step 4
Heat 2 tablespoons oil in the skillet. Stir in the onion, garlic, and shallots; cook until fragrant, about 1 or 2 minutes. Mix in the chile paste, and cook for 10 minutes, stirring occasionally. If the chile paste is too dry, add a small amount of water. Stir in remaining anchovies; cook for 5 minutes. Stir in salt, sugar, and tamarind juice; simmer until sauce is thick, about 5 minutes.

Step 5
Serve the onion and garlic sauce over the warm rice, and top with peanuts, fried anchovies, cucumbers, and eggs.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wai9bw1619788844.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=IUIs4C86Ilo',
                'ingredients' => '[35,36,205,27,99,155,18,156,392,446,135,53,55,103,184,446,23,34]',
                'measurements' => '[61,61,273,32,32,61,60,32,27,297,25,32,176,57,37,297,20,232]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            188 => 
            array (
                'id' => 189,
                'tmdb_id' => 52810,
                'name' => 'Osso Buco alla Milanese',
                'category_id' => 6,
                'area_id' => 11,
                'instructions' => 'Heat the oven to 300 degrees.
Dredging the shanks: pour the flour into a shallow dish (a pie plate works nicely). Season the veal shanks on all sides with salt and pepper. One at a time, roll the shanks around in the flour coat, and shake and pat the shank to remove any excuses flour. Discard the remaining flour.
Browning the shanks: put the oil and 1 tablespoon of the butter in a wide Dutch oven or heavy braising pot (6 to 7 quart) and heat over medium-high heat. When the butter has melted and the oil is shimmering, lower the shanks into the pot, flat side down; if the shanks won’t fit without touching one another, do this in batches. Brown the shanks, turning once with tongs, until both flat sides are well caramelized, about 5 minutes per side. If the butter-oil mixture starts to burn, lower the heat just a bit. Transfer the shanks to a large platter or tray and set aside.
The aromatics: pour off and discard the fat from the pot. Wipe out any burnt bits with a damp paper towel, being careful not to remove any delicious little caramelized bits. Ad the remaining 2 tablespoons butter to the pot and melt it over medium heat. When the butter has stopped foaming, add the onion, carrot, celery, and fennel. Season with salt and pepper, stir, and cook the vegetables until they begin to soften but do not brown, about 6 minutes. Stir in the garlic, orange zest, marjoram, and bay leaf, and stew for another minute or two.
The braising liquid: add the wine, increase the heat to high, and bring to a boil. Boil, stirring occasionally, to reduce the wine by about half, 5 minutes. Add the stock and tomatoes, with their juice, and boil again to reduce the liquid to about 1 cup total, about 10 minutes.
The braise: Place the shanks in the pot so that they are sitting with the exposed bone facing up, and pour over any juices that accumulated as they sat. Cover with parchment paper, pressing down so the parchment nearly touches the veal and the edges hang over the sides of the pot by about an inch. Cover tightly with the lid, and slide into the lower part of the oven to braise at a gentle simmer. Check the pot after the first 15 minutes, and if the liquid is simmering too aggressively, lower the oven heat by 10 or 15 degrees. Continue braising, turning the shanks and spooning some pan juices over the top after the first 40 minutes, until the meat is completely tender and pulling away from the bone, about 2 hours.
The gremolata: While the shanks are braising, stir together the garlic, parsley, and lemon zest in a small bowl. Cover with plastic wrap and set aside in a cool place (or the refrigerator, if your kitchen is very warm.)
The finish: When the veal is fork-tender and falling away from the bone, remove the lid and sprinkle over half of the gremolata. Return the veal to the oven, uncovered, for another 15 minutes to caramelize it some.
Using a slotted spatula or spoon, carefully lift the shanks from the braising liquid, doing your best to keep them intact. The shanks will be very tender and threatening to fall into pieces, and the marrow will be wobbly inside the bones, so this can be a bit tricky. But if they do break apart, don’t worry, the flavor won’t suffer at all. Arrange the shanks on a serving platter or other large plate, without stacking, and cover with foil to keep warm.
Finishing the sauce: Set the braising pot on top of the stove and evaluate the sauce: if there is a visible layer of fat floating on the surface, use a large spoon to skim it off and discard it. Taste the sauce for concentration of flavor. If it tastes a bit weak or flat, bring it to a boil over high heat, and boil to reduce the volume and intensify the flavor for 5 to 10 minutes. Taste again for salt and pepper. If the sauce wants more zip, stir in a teaspoon or two of the remaining gremolata.
Portioning the veal shanks: if the shanks are reasonably sized, serve one per person. If the shanks are gargantuan or you’re dealing with modest appetites, pull apart the larger shanks, separating them at their natural seams, and serve smaller amounts. Be sure to give the marrow bones to whomever prizes them most.
Serving: Arrange the veal shanks on warm dinner plates accompanied by the risotto, if serving. Just before carrying the plates to the table, sprinkle on the remaining gremolata and then spoon over a generous amount of sauce – the contact with the hot liquid will aromatize the gremolata and perk up everyone’s appetite with the whiff of garlic and lemon.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wwuqvt1487345467.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=9GUTC2Qwrf0',
                'ingredients' => '[447,19,47,2,53,64,85,33,55,448,172,99,284,218,54,83,55,449]',
                'measurements' => '[419,51,193,204,420,421,421,422,176,150,417,32,27,51,423,424,425,426]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            189 => 
            array (
                'id' => 190,
                'tmdb_id' => 52943,
                'name' => 'Oxtail with broad beans',
                'category_id' => 3,
                'area_id' => 9,
                'instructions' => 'Toss the oxtail with the onion, spring onion, garlic, ginger, chilli, soy sauce, thyme, salt and pepper. Heat the vegetable oil in a large frying pan over medium-high heat. Brown the oxtail in the pan until browned all over, about 10 minutes. Place into a pressure cooker, and pour in 375ml water. Cook at pressure for 25 minutes, then remove from heat, and remove the lid according to manufacturer\'s directions.
Add the broad beans and pimento berries, and bring to a simmer over medium-high heat. Dissolve the cornflour in 2 tablespoons water, and stir into the simmering oxtail. Cook and stir a few minutes until the sauce has thickened, and the broad beans are tender.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1520083578.jpg',
                'tags' => '[49,12,22]',
                'youtube_url' => 'https://www.youtube.com/watch?v=DIhxk-98Hz8',
                'ingredients' => '[450,53,176,55,27,330,133,380,135,36,352,106,36]',
                'measurements' => '[353,140,32,99,5,140,25,140,25,258,102,117,25]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            190 => 
            array (
                'id' => 191,
                'tmdb_id' => 52774,
                'name' => 'Pad See Ew',
                'category_id' => 2,
                'area_id' => 28,
                'instructions' => 'Mix Sauce in small bowl.
Mince garlic into wok with oil. Place over high heat, when hot, add chicken and Chinese broccoli stems, cook until chicken is light golden.
Push to the side of the wok, crack egg in and scramble. Don\'t worry if it sticks to the bottom of the wok - it will char and which adds authentic flavour.
Add noodles, Chinese broccoli leaves and sauce. Gently mix together until the noodles are stained dark and leaves are wilted. Serve immediately!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uuuspp1468263334.jpg',
                'tags' => '[39]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Ohy1DELF4is',
                'ingredients' => '[451,452,142,133,198,23,36,453,55,129,137,443]',
                'measurements' => '[427,75,75,37,37,37,75,75,154,27,32,167]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            191 => 
            array (
                'id' => 192,
                'tmdb_id' => 52780,
                'name' => 'Potato Gratin with Chicken',
                'category_id' => 2,
                'area_id' => 11,
            'instructions' => '15 minute potato gratin with chicken and bacon greens: a gratin always seems more effort and more indulgent than ordinary boiled or roasts, but it doesn\'t have to take 45mins, it\'s nice for a change and you can control the calorie content by going with full fat to low fat creme fraiche. (It\'s always tastes better full fat though obviously!) to serve 4: use 800g of potatoes, finely slice and boil in a pan for about 5-8 mins till firmish, not soft. Finely slice 3 onions and place in an oven dish with 2 tblsp of olive oil and 100ml of chicken stock. Cook till the onions are soft then drain the potatoes and pour onto the onions. Season and spoon over cream or creme fraiche till all is covered but not swimming. Grate Parmesan over the top then finish under the grill till nicely golden. serve with chicken and bacon, peas and spinach.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qwrtut1468418027.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=p3u8eiy3yHI',
                'ingredients' => '[66,70,47,218,82,347,194,104,454,332]',
                'measurements' => '[286,57,84,82,221,83,60,60,83,83]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            192 => 
            array (
                'id' => 193,
                'tmdb_id' => 52804,
                'name' => 'Poutine',
                'category_id' => 6,
                'area_id' => 8,
            'instructions' => 'Heat oil in a deep fryer or deep heavy skillet to 365°F (185°C).
Warm gravy in saucepan or microwave.
Place the fries into the hot oil, and cook until light brown, about 5 minutes.
Remove to a paper towel lined plate to drain.
Place the fries on a serving platter, and sprinkle the cheese over them.
Ladle gravy over the fries and cheese, and serve immediately.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uuyrrx1487327597.jpg',
                'tags' => '[54,22,28]',
                'youtube_url' => 'https://www.youtube.com/watch?v=UVAMAoA2_WU',
                'ingredients' => '[135,455,66,456]',
                'measurements' => '[44,26,428,61]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            193 => 
            array (
                'id' => 194,
                'tmdb_id' => 52837,
                'name' => 'Pilchard puttanesca',
                'category_id' => 11,
                'area_id' => 11,
                'instructions' => 'Cook the pasta following pack instructions. Heat the oil in a non-stick frying pan and cook the onion, garlic and chilli for 3-4 mins to soften. Stir in the tomato purée and cook for 1 min, then add the pilchards with their sauce. Cook, breaking up the fish with a wooden spoon, then add the olives and continue to cook for a few more mins.

Drain the pasta and add to the pan with 2-3 tbsp of the cooking water. Toss everything together well, then divide between plates and serve, scattered with Parmesan.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vvtvtr1511180578.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=wqZzLAPmr9k',
                'ingredients' => '[457,47,53,55,243,123,458,145,347]',
                'measurements' => '[9,77,85,99,32,77,131,429,430]',
                'created_at' => '2025-04-15 09:39:27',
                'updated_at' => '2025-04-15 09:39:27',
            ),
            194 => 
            array (
                'id' => 195,
                'tmdb_id' => 52847,
                'name' => 'Pork Cassoulet',
                'category_id' => 10,
                'area_id' => 7,
            'instructions' => 'Heat oven to 140C/120C fan/gas 1. Put a large ovenproof pan (with a tight-fitting lid) on a high heat. Add your fat and diced meat, cook for a few mins to seal the edges, giving it a quick stir to cook evenly. Reduce the heat to low, add the sliced onion, whole garlic cloves, carrot and fennel seeds, and cook gently to soften the veg for a few mins.
Pour over the red wine vinegar, scraping any meaty bits off the bottom of the pan. Add the stock, tomato purée, and half the rosemary and parsley. Bring to the boil and simmer for 10 mins, then season, cover with a lid and put into the oven for 2 hrs, removing the lid for the final hour of cooking. Stir occasionally and add the beans with 30 mins to go.
Remove the pan from the oven and heat the grill. Scatter the top with the remaining herbs and breadcrumbs, drizzle a little oil over the top, and return to the oven for 5-10 mins, until the breadcrumbs are golden. Serve with crusty bread and green veg.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wxuvuv1511299147.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=MEdHMTD0VCA',
                'ingredients' => '[119,152,53,55,64,459,269,87,123,61,83,460,150,17,41,68]',
                'measurements' => '[257,122,50,251,431,5,84,240,253,248,245,42,84,262,12,12]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            195 => 
            array (
                'id' => 196,
                'tmdb_id' => 52854,
                'name' => 'Pancakes',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Put the flour, eggs, milk, 1 tbsp oil and a pinch of salt into a bowl or large jug, then whisk to a smooth batter. Set aside for 30 mins to rest if you have time, or start cooking straight away.
Set a medium frying pan or crêpe pan over a medium heat and carefully wipe it with some oiled kitchen paper. When hot, cook your pancakes for 1 min on each side until golden, keeping them warm in a low oven as you go.
Serve with lemon wedges and sugar, or your favourite filling. Once cold, you can layer the pancakes between baking parchment, then wrap in cling film and freeze for up to 2 months.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rwuyqx1511383174.jpg',
                'tags' => '[13,14,15,3]',
                'youtube_url' => 'https://www.youtube.com/watch?v=LWuuCndtJr0',
                'ingredients' => '[19,18,16,69,23,96,461]',
                'measurements' => '[121,161,118,77,12,12,12]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            196 => 
            array (
                'id' => 197,
                'tmdb_id' => 52857,
                'name' => 'Pumpkin Pie',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Place the pumpkin in a large saucepan, cover with water and bring to the boil. Cover with a lid and simmer for 15 mins or until tender. Drain pumpkin; let cool.
Heat oven to 180C/160C fan/gas 4. Roll out the pastry on a lightly floured surface and use it to line a 22cm loose-bottomed tart tin. Chill for 15 mins. Line the pastry with baking parchment and baking beans, then bake for 15 mins. Remove the beans and paper, and cook for a further 10 mins until the base is pale golden and biscuity. Remove from the oven and allow to cool slightly.
Increase oven to 220C/200C fan/gas 7. Push the cooled pumpkin through a sieve into a large bowl. In a separate bowl, combine the sugar, salt, nutmeg and half the cinnamon. Mix in the beaten eggs, melted butter and milk, then add to the pumpkin purée and stir to combine. Pour into the tart shell and cook for 10 mins, then reduce the temperature to 180C/160C fan/gas 4. Continue to bake for 35-40 mins until the filling has just set.
Leave to cool, then remove the pie from the tin. Mix the remaining cinnamon with the icing sugar and dust over the pie. Serve chilled.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/usuqtp1511385394.jpg',
                'tags' => '[65,16,14]',
                'youtube_url' => 'https://www.youtube.com/watch?v=hpapqEeb36k',
                'ingredients' => '[395,279,10,5,21,44,14,18,2,16,118]',
                'measurements' => '[98,122,48,67,33,33,5,49,18,100,253]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            197 => 
            array (
                'id' => 198,
                'tmdb_id' => 52861,
                'name' => 'Peanut Butter Cheesecake',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Oil and line a 20cm round loose- bottomed cake tin with cling film, making it as smooth as possible. Melt the butter in a pan. Crush the biscuits by bashing them in a bag with a rolling pin, then stir them into the butter until very well coated. Press the mixture firmly into the base of the tin and chill.
Soak the gelatine in water while you make the filling. Tip the ricotta into a bowl, then beat in the peanut butter and syrup. Ricotta has a slightly grainy texture so blitz until smooth with a stick blender for a smoother texture if you prefer.
Take the soaked gelatine from the water and squeeze dry. Put it into a pan with the milk and heat very gently until the gelatine dissolves. Beat into the peanut mixture, then tip onto the biscuit base. Chill until set.
To freeze, leave in the tin and as soon as it is solid, cover the surface with cling film, then wrap the tin with cling film and foil.
To defrost, thaw in the fridge overnight.
To serve, carefully remove from the tin. Whisk the cream with the sugar until it holds its shape, then spread on top of the cheesecake and scatter with the peanut brittle.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qtuuys1511387068.jpg',
                'tags' => '[19,14,21,54,22]',
                'youtube_url' => 'https://www.youtube.com/watch?v=QSTsturcyL0',
                'ingredients' => '[2,462,463,146,24,201,16,43,263,464]',
                'measurements' => '[113,100,174,47,100,100,103,432,84,433]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            198 => 
            array (
                'id' => 199,
                'tmdb_id' => 52862,
                'name' => 'Peach & Blueberry Grunt',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Heat oven to 190C/170C fan/gas 5. Butter a wide shallow ovenproof dish. Blend the cornflour with the orange zest and juice, and put in a large pan with the sugar. Halve, stone and slice the peaches and add to the pan. Bring slowly to the boil, stirring gently until the sauce is shiny and thickened, about 3-4 mins. Remove from the heat, stir in the blueberries and tip into the prepared dish.
Tip the flour into a mixing bowl and add the 50g butter. Rub the butter into the flour until it resembles fine breadcrumbs, then stir in half the sugar. Mix the remaining sugar with the cinnamon and set aside.
Add the milk to the dry ingredients and mix to a soft dough. Turn out onto a lightly floured surface and knead briefly. Roll out to an oblong roughly 16 x 24cm. Brush with melted butter and sprinkle evenly with the spicy sugar. Roll up from one long side and cut into 12 slices. Arrange around the top of the dish, leaving the centre uncovered.
Bake for 20-25 mins, until the topping is crisp and golden. Serve warm.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ssxvup1511387476.jpg',
                'tags' => '[14,4,3]',
                'youtube_url' => 'https://www.youtube.com/watch?v=SNeO28BCpsc',
                'ingredients' => '[106,202,202,5,465,461,113,2,280,14,16]',
                'measurements' => '[5,434,197,25,21,79,102,113,121,5,134]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            199 => 
            array (
                'id' => 200,
                'tmdb_id' => 52902,
                'name' => 'Parkin Cake',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Heat oven to 160C/140C fan/gas 3. Grease a deep 22cm/9in square cake tin and line with baking parchment. Beat the egg and milk together with a fork.

Gently melt the syrup, treacle, sugar and butter together in a large pan until the sugar has dissolved. Remove from the heat. Mix together the oatmeal, flour and ginger and stir into the syrup mixture, followed by the egg and milk.

Pour the mixture into the tin and bake for 50 mins - 1 hr until the cake feels firm and a little crusty on top. Cool in the tin then wrap in more parchment and foil and keep for 3-5 days before eating if you can – it’ll become softer and stickier the longer you leave it, up to 2 weeks.
',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qxuqtt1511724269.jpg',
                'tags' => '[66]',
                'youtube_url' => 'https://www.youtube.com/watch?v=k1lG4vk2MQA',
                'ingredients' => '[2,137,16,201,92,275,466,113,467]',
                'measurements' => '[102,50,182,102,276,276,121,79,117]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            200 => 
            array (
                'id' => 201,
                'tmdb_id' => 52916,
                'name' => 'Pear Tarte Tatin',
                'category_id' => 1,
                'area_id' => 7,
                'instructions' => 'Core the pears, then peel as neatly as possible and halve. If you like, they can be prepared up to a day ahead and kept in the fridge, uncovered, so that they dry out.
Tip the sugar, butter, star anise, cardamom and cinnamon into an ovenproof frying pan, about 20cm wide, and place over a high heat until bubbling. Shake the pan and stir the buttery sauce until it separates and the sugar caramelises to a toffee colour.
Lay the pears in the pan, then cook in the sauce for 10-12 mins, tossing occasionally, until completely caramelised. Don’t worry about them burning – they won’t – but you want to caramelise them as much as possible. Splash in the brandy and let it flambé, then set the pears aside.
Heat oven to 200C/fan 180C/gas 6. Roll the pastry out to the thickness of a £1 coin. Using a plate slightly larger than the top of the pan, cut out a circle, then press the edges of the circle of pastry to thin them out.
When the pears have cooled slightly, arrange them in the pan, cut side up, in a floral shape, with the pears around the edge pointing inwards. Rest the cinnamon stick on the top in the centre, with the cardamom pods scattered around.
Drape the pastry over the pears, then tuck the edges down the pan sides and under the fruit (see Gordon’s guide). Pierce the pastry a few times, then bake for 15 mins. If a lot of juice bubbles up the side of the pan, pour it off at this stage (see guide). Reduce oven to 180C/fan 160C/gas 4 and bake for 15 mins more until the pastry is golden. Leave the tart to stand for 10 mins, then invert it carefully onto a serving dish.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rxvxrr1511797671.jpg',
                'tags' => '[1,67,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=8U1tKWKDeWA',
                'ingredients' => '[468,5,2,179,125,14,240,50]',
                'measurements' => '[24,121,121,4,435,50,25,47]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            201 => 
            array (
                'id' => 202,
                'tmdb_id' => 52921,
                'name' => 'Provençal Omelette Cake',
                'category_id' => 4,
                'area_id' => 7,
                'instructions' => 'Break the eggs into two bowls, five in each. Whisk lightly and season with salt and pepper. Heat the oil in a pan, add the courgettes and spring onions, then fry gently for about 10 mins until softened. Cool, then stir into one bowl of eggs with a little salt and pepper. Add the roasted peppers to the other bowl of eggs with the garlic, chilli, salt and pepper.
Heat a little oil in a 20-23cm frying pan, preferably non-stick. Pour the eggs with courgette into a measuring jug, then pourabout one-third of the mixture into the pan, swirling it to cover the base of the pan. Cook until the egg is set and lightly browned underneath, then cover the pan with a plate and invert the omelette onto it. Slide it back into the pan to cook the other side. Repeat with the remaining mix to make two more omelettes, adding a little oil to the pan each time. Stack the omelettes onto a plate. Make three omelettes in the same way with the red pepper mixture, then stack them on a separate plate.
Now make the filling. Beat the cheese to soften it, then beat in the milk to make a spreadable consistency. Stir in the herbs, salt and pepper. Line a deep, 20-23cm round cake tin with cling film (use a tin the same size as the frying pan). Select the best red pepper omelette and place in the tin, prettiest side down. Spread with a thin layer of cheese filling, then cover with a courgette omelette. Repeat, alternating the layers, until all the omelettes and filling are in the tin, finishing with an omelette. Flip the cling film over the omelette, then chill for up to 24 hrs.
To serve, invert the omelette cake onto a serving plate and peel off the cling film. Pile rocket on the top and scatter over the cheese, a drizzle of olive oil and a little freshly ground black pepper. Serve cut into wedges.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qwtrtp1511799242.jpg',
                'tags' => '[55]',
                'youtube_url' => 'https://www.youtube.com/watch?v=B7isFo2uP2k',
                'ingredients' => '[18,47,312,176,131,28,243,262,16,349,171,469,347]',
                'measurements' => '[251,117,129,239,60,295,32,9,134,182,25,12,12]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            202 => 
            array (
                'id' => 203,
                'tmdb_id' => 52922,
                'name' => 'Prawn & Fennel Bisque',
                'category_id' => 7,
                'area_id' => 7,
                'instructions' => 'Shell the prawns, then fry the shells in the oil in a large pan for about 5 mins. Add the onion, fennel and carrots and cook for about 10 mins until the veg start to soften. Pour in the wine and brandy, bubble hard for about 1 min to drive off the alcohol, then add the tomatoes, stock and paprika. Cover and simmer for 30 mins. Meanwhile, chop the prawns.
Blitz the soup as finely as you can with a stick blender or food processor, then press through a sieve into a bowl. Spend a bit of time really working the mixture through the sieve as this will give the soup its velvety texture.
Tip back into a clean pan, add the prawns and cook for 10 mins, then blitz again until smooth. You can make and chill this a day ahead or freeze it for 1 month. Thaw ovenight in the fridge. To serve, gently reheat in a pan with the cream. If garnishing, cook the 8 prawns in a little butter. Spoon into small bowls and top with the prawns and snipped fennel fronds.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rtwwvv1511799504.jpg',
                'tags' => '[32,59,50,56]',
                'youtube_url' => 'https://www.youtube.com/watch?v=4thpMbDakgM',
                'ingredients' => '[470,47,53,33,64,284,240,249,350,167,43,340]',
                'measurements' => '[353,182,50,50,101,103,117,42,306,436,103,24]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            203 => 
            array (
                'id' => 204,
                'tmdb_id' => 52930,
                'name' => 'Pate Chinois',
                'category_id' => 3,
                'area_id' => 8,
                'instructions' => 'In a large pot of salted water, cook the potatoes until they are very tender. Drain.
With a masher, coarsely crush the potatoes with at least 30 ml (2 tablespoons) of butter. With an electric mixer, purée with the milk. Season with salt and pepper. Set aside.
With the rack in the middle position, preheat the oven to 190 °C (375 °F).
In a large skillet, brown the onion in the remaining butter. Add the meat and cook until golden brown. Season with salt and pepper. Remove from the heat.
Lightly press the meat at the bottom of a 20-cm (8-inch) square baking dish. Cover with the corn and the mashed potatoes. Sprinkle with paprika and parsley.
Bake for about 30 minutes. Finish cooking under the broiler. Let cool for 10 minutes.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yyrrxr1511816289.jpg',
                'tags' => '[12,5]',
                'youtube_url' => 'https://www.youtube.com/watch?v=QRFqnLkEv3I',
                'ingredients' => '[66,2,16,158,53,471,167,83,21,102]',
                'measurements' => '[167,14,51,353,85,385,152,152,44,44]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            204 => 
            array (
                'id' => 205,
                'tmdb_id' => 52932,
                'name' => 'Pouding chomeur',
                'category_id' => 1,
                'area_id' => 8,
                'instructions' => 'In a large bowl, with an electric mixer, mix the butter and sugar till the mix is light.
Add eggs and vanilla and mix.
In another bowl, mix flour and baking powder.
Alternate flour mix and milk to the butter mix.
Pour into a 13 inch by 9 inch greased pan.
MAPLE SAUCE.
In a large casserole, bring to boil the syrup, brown sugar, cream and butter and constantly stir.
Reduce heat and and gently cook 2 minutes or till sauce has reduced a little bit.
Pour sauce gently over cake.
Bake at 325°f (160°c) about 35 minutes or till cake is light brown and when toothpick inserted comes out clean.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yqqqwu1511816912.jpg',
                'tags' => '[4]',
                'youtube_url' => 'https://www.youtube.com/watch?v=WFvj71RZYPc',
                'ingredients' => '[2,23,18,94,19,20,16,149,275,277,2]',
                'measurements' => '[51,27,4,5,61,5,312,166,166,166,232]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            205 => 
            array (
                'id' => 206,
                'tmdb_id' => 52958,
                'name' => 'Peanut Butter Cookies',
                'category_id' => 1,
                'area_id' => 4,
            'instructions' => 'Preheat oven to 350ºF (180ºC).
In a large bowl, mix together the peanut butter, sugar, and egg.
Scoop out a spoonful of dough and roll it into a ball. Place the cookie balls onto a nonstick baking sheet.
For extra decoration and to make them cook more evenly, flatten the cookie balls by pressing a fork down on top of them, then press it down again at a 90º angle to make a criss-cross pattern.
Bake for 8-10 minutes or until the bottom of the cookies are golden brown.
Remove from baking sheet and cool.
Enjoy!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1544384070.jpg',
                'tags' => '[13,54,43]',
                'youtube_url' => '',
                'ingredients' => '[24,23,137]',
                'measurements' => '[27,132,32]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            206 => 
            array (
                'id' => 207,
                'tmdb_id' => 53014,
                'name' => 'Pizza Express Margherita',
                'category_id' => 6,
                'area_id' => 11,
                'instructions' => '1 Preheat the oven to 230°C.

2 Add the sugar and crumble the fresh yeast into warm water.

3 Allow the mixture to stand for 10 – 15 minutes in a warm place (we find a windowsill on a sunny day works best) until froth develops on the surface.

4 Sift the flour and salt into a large mixing bowl, make a well in the middle and pour in the yeast mixture and olive oil.

5 Lightly flour your hands, and slowly mix the ingredients together until they bind.

6 Generously dust your surface with flour.

7 Throw down the dough and begin kneading for 10 minutes until smooth, silky and soft.

8 Place in a lightly oiled, non-stick baking tray (we use a round one, but any shape will do!)

9 Spread the passata on top making sure you go to the edge.

10 Evenly place the mozzarella (or other cheese) on top, season with the oregano and black pepper, then drizzle with a little olive oil.

11 Cook in the oven for 10 – 12 minutes until the cheese slightly colours.

12 When ready, place the basil leaf on top and tuck in!',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/x0lk931587671540.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Mt5lgUZRoUg',
                'ingredients' => '[36,23,126,10,21,47,250,315,75,171,182]',
                'measurements' => '[103,5,410,196,162,262,437,429,229,246,95]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            207 => 
            array (
                'id' => 208,
                'tmdb_id' => 53017,
            'name' => 'Paszteciki (Polish Pasties)',
                'category_id' => 3,
                'area_id' => 14,
                'instructions' => 'Sift flour and salt into a large mixing bowl.
Use a spoon to push the egg yolk through a fine sieve into the flour.
Add the raw egg and mix well.
Beat in butter 1 tablespoon at a time.
Place dough on a floured surface and knead until smooth and elastic, then wrap in waxed paper and refrigerate until firm (at least 30 minutes).
In a heavy skillet, melt 2 tablespoons butter over medium heat; saute the onion and rutabaga until the onion is soft and transparent (5 minutes).
Put the onions, rutabaga, and beef through a meat grinder twice if you have one, if not just chop them up as fine as possible.
Melt the remaining 4 tablespoons butter over medium heat, and add the meat mixture.
Cook over low heat, stirring occasionally, until all of the liquid has evaporated and the mixture is thick enough to hold its shape.
Remove from heat and let cool, then stir in 1 egg, and season with salt and pepper.
Preheat oven to 350°F.
On a lightly floured surface, roll the dough out into a 13x8" rectangle (1/8" thick).
Spoon the filling down the center of the rectangle lengthwise, leaving about an inch of space on each end.
Lightly brush the long sides with cold water, then fold one of the long sides over the filling and the other side over the top of that.
Brush the short ends with cold water and fold them over the top, enclosing the filling.
Place pastry seam side down on a baking sheet and brush the top evenly with the remaining scrambled egg.
Bake in preheated oven until rich golden brown (30 minutes).
Slice pastry diagonally into 1.5" long pieces and serve as an appetizer or with soup.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/c9a3l31593261890.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=qANmR6BBJpQ',
                'ingredients' => '[19,21,137,137,2,2,53,97,59,18,21,102]',
                'measurements' => '[27,273,438,32,143,134,232,132,141,49,5,273]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            208 => 
            array (
                'id' => 209,
                'tmdb_id' => 53019,
            'name' => 'Pierogi (Polish Dumplings)',
                'category_id' => 7,
                'area_id' => 14,
                'instructions' => 'To prepare the sauerkraut filling, melt the butter in a skillet over medium heat. Stir in the onion, and cook until translucent, about 5 minutes. Add the drained sauerkraut and cook for an additional 5 minutes. Season to taste with salt and pepper, then remove to a plate to cool.

For the mashed potato filling, melt the butter in a skillet over medium heat. Stir in the onion, and cook until translucent, about 5 minutes. Stir into the mashed potatoes, and season with salt and white pepper.

To make the dough, beat together the eggs and sour cream until smooth. Sift together the flour, salt, and baking powder; stir into the sour cream mixture until dough comes together. Knead the dough on a lightly floured surface until firm and smooth. Divide the dough in half, then roll out one half to 1/8 inch thickness. Cut into 3 inch rounds using a biscuit cutter.

Place a small spoonful of the mashed potato filling into the center of each round. Moisten the edges with water, fold over, and press together with a fork to seal. Repeat procedure with the remaining dough and the sauerkraut filling.

Bring a large pot of lightly salted water to a boil. Add perogies and cook for 3 to 5 minutes or until pierogi float to the top. Remove with a slotted spoon.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/45xxr21593348847.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=lyqDmUroZrI',
                'ingredients' => '[2,357,170,2,357,66,18,228,19,21,20]',
                'measurements' => '[25,232,314,20,132,61,57,221,186,273,117]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            209 => 
            array (
                'id' => 210,
                'tmdb_id' => 53022,
            'name' => 'Polskie Nalesniki (Polish Pancakes)',
                'category_id' => 1,
                'area_id' => 14,
                'instructions' => 'Add flour, eggs, milk, water, and salt in a large bowl then mix with a hand mixer until you have a smooth, lump-free batter.
At this point, mix in the butter or the vegetable oil. Alternatively, you can use them to grease the pan before frying each pancake.
Heat a non-stick pan over medium heat, then pour in the batter, swirling the pan to help it spread.
When the pancake starts pulling away a bit from the sides, and the top is no longer wet, flip it and cook shortly on the other side as well.
Transfer to a plate. Cook the remaining batter until all used up.
Serve warm, with the filling of your choice.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/58bkyo1593350017.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=EZS4ev2crHc',
                'ingredients' => '[19,18,16,36,21,23,2]',
                'measurements' => '[27,4,27,296,95,5,20]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            210 => 
            array (
                'id' => 211,
                'tmdb_id' => 53039,
                'name' => 'Piri-piri chicken and slaw',
                'category_id' => 2,
                'area_id' => 26,
                'instructions' => 'STEP 1

Whizz together all of the marinade ingredients in a small food processor. Rub the marinade onto the chicken and leave for 1 hour at room temperature.

STEP 2

Heat the oven to 190C/fan 170C/gas 5. Put the chicken in a roasting tray and cook for 1 hour 20 minutes. Rest under loose foil for 20 minutes. While the chicken is resting, mix together the slaw ingredients and season. Serve the chicken with slaw, fries and condiments.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/hglsbl1614346998.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=_RKwKjskopk',
                'ingredients' => '[129,243,55,27,365,32,167,269,17,151,64,186,169,163,374,269,206]',
                'measurements' => '[130,164,154,5,5,5,5,25,25,86,4,32,398,25,25,25,5]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            211 => 
            array (
                'id' => 212,
                'tmdb_id' => 53042,
                'name' => 'Portuguese prego with green piri-piri',
                'category_id' => 3,
                'area_id' => 26,
                'instructions' => 'STEP 1

Rub the garlic over the steaks then put in a sandwich bag and tip in the olive oil, sherry vinegar and parsley stalks. Smoosh everything together, then use a rolling pin to bash the steaks a few times. Leave for 1-2 hours.

STEP 2

To make the sauce, put all the ingredients into a blender with 1 tbsp water and whizz until as smooth as possible. This will make more than you’ll need for the recipe but will keep for a week in an airtight jar.

STEP 3

Heat a griddle or frying pan to high. Brush away the garlic and parsley stalks from the steaks and season well. Sear the steaks for 2 minutes on each side then rest on a plate. Put the ciabatta halves onto the plate, toasted-side down, to soak up any juices.

STEP 4

Slice the steaks then stuff into the rolls with the green sauce and rocket.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ewcikl1614348364.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FbIKfcDEPLA',
                'ingredients' => '[55,48,47,373,83,472,469,245,83,235,373,176,55,5]',
                'measurements' => '[78,439,25,117,246,4,440,404,404,32,117,101,142,17]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            212 => 
            array (
                'id' => 213,
                'tmdb_id' => 53044,
            'name' => 'Portuguese barbecued pork (Febras assadas)',
                'category_id' => 10,
                'area_id' => 26,
                'instructions' => 'STEP 1

Cut the tenderloins into 5 equal-size pieces leaving the tail ends a little longer. Take a clear plastic bag and slip one of the pieces in. Bash it into an escalope the size of a side-plate with a rolling pin and repeat with the remaining pieces.

STEP 2

Put the wine, paprika, some salt and pepper and the juice of ½ a lemon in a bowl and add the pork. Leave to marinate for 20-30 minutes, while you get your barbecue to the stage where the coals are glowing but there are no flames.

STEP 3

To make the chips, fill a basin with cool water and cut the potatoes into 3cm-thick chips. Soak them in the water for 5 minutes and then change the water. Leave for 5 more minutes. Drain and then pat dry on a towel or with kitchen paper.

STEP 4

Heat the oil in a deep fryer or a deep heavy-based pan with a lid to 130C and lower the chips into the oil (in batches). Blanch for 8-10 minutes. Remove from the oil and drain well. Place on a tray to cool. Reheat the oil to 180C (make sure it’s hot or your chips will be soggy) and lower the basket of chips into the oil (again, do this in batches). Leave to cook for 2 minutes and then give them a little shake. Cook for another minute or so until they are well coloured and crisp to the touch. Drain well for a few minutes, tip into a bowl and sprinkle with sea salt.

STEP 5

The pork will cook quickly so do it in 2 batches. Take the pieces out of the marinade, rub them with oil, and drop them onto the barbecue (you could also use a chargrill). Cook for 1 minute on each side – they may flare up as you do so. This should really be enough time as they will keep on cooking. Take them off the barbecue and pile onto a plate. Repeat with the remaining batch.

STEP 6

Serve by piling a plate with chips, drop the pork on top of each pile and pouring the juices from the plate over so the chips take up the flavours. Top with a spoon of mayonnaise and a wedge of lemon.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/cybyue1614349443.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=tVpsZaejyYU',
                'ingredients' => '[152,214,167,109,110,47,163,66,135]',
                'measurements' => '[4,13,17,4,142,44,12,304,137]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            213 => 
            array (
                'id' => 214,
                'tmdb_id' => 53045,
            'name' => 'Portuguese fish stew (Caldeirada de peixe)',
                'category_id' => 8,
                'area_id' => 26,
                'instructions' => 'STEP 1

Heat a drizzle of oil in a large, deep-sided frying pan, and fry the onion and pepper on a medium heat until softened but not browned. Finely chop the coriander stalks (keep the leaves for later), and add to the pan with the chilli and chopped garlic. Fry for another few minutes. Add the wine, saffron and bay leaf and let it simmer until reduced by half.

STEP 2

Add the potatoes, tomatoes, and 300ml water and bring to a gentle boil. Break up the tomatoes with a spoon on the side of the pan and simmer for 20-25 minutes until the potatoes are just tender, and the tomatoes have broken down.

STEP 3

Season well, then gently push the fish into the sauce, and arrange the squid, prawns, clams and mussels on the surface. Put the lid on and cook for 6-8 minutes until the mussel and clam shells have opened, the prawns are cooked and the fish is flaky. Toast the bread, rub lightly with the halved garlic clove and drizzle with olive oil. Serve the stew scatted with chopped coriander leaves, and the toasts for dunking.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/do7zps1614349775.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=utv-GpSJypk',
                'ingredients' => '[70,131,32,243,55,284,397,99,66,78,355,473,470,248,351,474]',
                'measurements' => '[129,165,404,284,176,106,95,32,9,42,115,9,24,47,47,86]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            214 => 
            array (
                'id' => 215,
                'tmdb_id' => 53046,
                'name' => 'Portuguese custard tarts',
                'category_id' => 1,
                'area_id' => 26,
                'instructions' => 'STEP 1
Roll the pastry
Mix the flour and icing sugar, and use this to dust the work surface. Roll the pastry out to make a 45 x 30cm rectangle. Roll up lengthways to create a long sausage shape.

STEP 2
Cutting pastry into rounds
Cut the pastry into 24 wheels, about 1-2cm thick.

STEP 3
Roll out each pastry portion
Roll each wheel lightly with the rolling pin to fit 2 x 12-hole non-stick fairy cake tins.

STEP 4
Press pastry into the tin
Press the pastry circles into the tins and mould into the tins to make thin cases. Chill until needed.

STEP 5
Make the infused syrup
Heat the oven to 220C/fan 200C/gas 7. Make a sugar syrup by bringing the sugar, 200ml water, lemon zest and cinnamon stick to the boil. Reduce until syrupy, allow to cool, then remove the cinnamon and lemon. Whisk the eggs, egg yolks and cornflour until smooth in another large pan.

STEP 6
Making custard
Heat the milk and vanilla pod seeds in a separate pan until just below the boil. Gradually pour the hot milk over the eggs and cornflour, then cook on a low heat, continually whisking.

STEP 7
Add syrup to custard
Add the cooled sugar syrup to the custard and whisk until thickened slightly.

STEP 8
Pour custard into the tins
Pour the custard through a sieve. Pour into the pastry cases and bake for 15 minutes until the pastry is golden and the custard has darkened.

STEP 9
cool and dust with icing sugar
Cool completely in the tins then sift over icing sugar and ground cinnamon to serve.



',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vmz7gl1614350221.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=lWLCxui1Mw8',
                'ingredients' => '[10,118,50,5,449,14,18,51,106,252,260,14]',
                'measurements' => '[25,25,126,79,150,384,4,60,113,385,441,12]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            215 => 
            array (
                'id' => 216,
                'tmdb_id' => 53081,
            'name' => 'Potato Salad (Olivier Salad)',
                'category_id' => 4,
                'area_id' => 6,
                'instructions' => 'Cut the potatoes and carrots into small uniform cubes.
Place them in a large pot and fill with water.
Add salt and vinegar. Bring it to a boil over medium high heat, and then reduce the heat to medium and continue to cook until the potatoes are cooked through, about 15 minutes. Drain the potatoes and let it cool to room temperature.
Meanwhile, cut the sausage and pickles into small cubes, and chop the green onions.
Cut the hard-boiled eggs into small cubes as well.
If using fresh dill, chop them as well.
In a large bowl, combine potatoes, carrots, sausage, pickles, peas and green onions.
Add mayo and dill and mix until well combined.
Salt and pepper to taste. Cover with a plastic wrap and refrigerate for at least 1 hour before serving.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ebvuir1699013665.jpg',
                'tags' => '[68]',
                'youtube_url' => 'https://www.youtube.com/watch?v=RnsWwHcpKiY',
                'ingredients' => '[66,64,21,164,18,89,189,332,70,163]',
                'measurements' => '[60,57,117,326,60,442,297,26,60,27]',
                'created_at' => '2025-04-15 09:39:28',
                'updated_at' => '2025-04-15 09:39:28',
            ),
            216 => 
            array (
                'id' => 217,
                'tmdb_id' => 52783,
                'name' => 'Rigatoni with fennel sausage sauce',
                'category_id' => 12,
                'area_id' => 11,
                'instructions' => 'Heat a tablespoon of oil in a large saute pan for which you have a lid. Add the sausage pieces and fry on a medium-high heat for 10 minutes, stirring regularly, until golden-brown all over. Transfer the sausages to a plate, then add the onion and fennel to the hot pan and fry for 15 minutes, stirring once in a while, until soft and caramelised; if the pan goes a bit dry, add a teaspoon or so of extra oil. Stir in the paprika, garlic and half the fennel seeds, fry for two minutes more, then pour on the wine and boil for 30 seconds, to reduce by half. Add the tomatoes, sugar, 100ml water, the seared sausage and half a teaspoon of salt, cover and simmer for 30 minutes; remove the lid after 10 minutes, and cook until the sauce is thick and rich. Remove from the heat, stir through the olives and remaining fennel seeds and set aside until you’re ready to serve.

Bring a large pot of salted water to a boil, add the pasta and cook for 12-14 minutes (or according to the instructions on the packet), until al dente. Meanwhile, reheat the sauce. Drain the pasta, return it to the pot, stir in a tablespoon of oil, then divide between the bowls. 

Put all the pesto ingredients except the basil in the small bowl of a food processor. Add a tablespoon of water and blitz to a rough paste. Add the basil, then blitz until just combined (the pesto has a much better texture if the basil is not overblended).

Spoon over the ragù and top with a spoonful of pesto. Finish with a sprinkling of chopped fennel fronds, if you have any, and serve at once.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qtqvys1468573168.jpg',
                'tags' => '[39]',
                'youtube_url' => 'https://www.youtube.com/watch?v=45dpOfESxr8',
                'ingredients' => '[47,303,53,404,475,55,459,98,249,5,476,477,478,446,55,47,245]',
                'measurements' => '[443,444,445,446,33,447,448,82,449,33,450,47,451,452,453,14,454]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            217 => 
            array (
                'id' => 218,
                'tmdb_id' => 52786,
                'name' => 'Rocky Road Fudge',
                'category_id' => 1,
                'area_id' => 4,
                'instructions' => 'Line an 8-inch-square baking pan with wax paper or foil, and coat with non-stick spray.
Pour ½ cup of the miniature marshmallows into the bottom of the lined baking dish.
In a microwave-safe bowl, combine the chocolate chips and peanut butter. Microwave the chocolate mixture in 20-second intervals, stirring in between each interval, until the chocolate is melted.
Add the vanilla extract and stir well, until smooth.
Reserve 2 tablespoons of the chopped almonds or peanuts, and set aside.
Fold 1 ½ cups of the miniature marshmallows and the remaining chopped nuts into the chocolate mixture.
Transfer the chocolate mixture into the prepared pan and spread into an even layer. Immediately top with the reserved chopped nuts and the mallow bits or additional miniature marshmallows, if using.
Refrigerate for 4 hours, or until set.
Remove the fudge and wax paper from the pan. Carefully peel all of wax paper from the fudge.
Cut the fudge into bite-sized pieces and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vtxyxv1483567157.jpg',
                'tags' => '[36,38,15,2]',
                'youtube_url' => 'https://www.youtube.com/watch?v=N1aJ3nEYXyg',
                'ingredients' => '[370,367,24,94,392]',
                'measurements' => '[61,186,51,5,455]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            218 => 
            array (
                'id' => 219,
                'tmdb_id' => 52809,
                'name' => 'Recheado Masala Fish',
                'category_id' => 8,
                'area_id' => 3,
                'instructions' => 'Soak all the spices, ginger, garlic, tamarind pulp and kashmiri chilies except oil in vinegar.
Add sugar and salt.
Also add turmeric powder.
Combine all nicely and marinate for 35-40 mins.
Grind the mixture until soft and smooth. Add more vinegar if required but ensure the paste has to be thick so add vinegar accordingly. If the masala paste is thin then it would not stick to the fish.
Rinse the fish slit from the center and give some incision from the top. You could see the fish below for clarity.
Now stuff the paste into the center and into the incision. Coat the entire fish with this paste. Marinate the fish for 30 mins.
Place oil in a shallow pan, once oil is quite hot shallow fry the stuffed mackerels.
Fry until golden brown from both sides
Serve the recheado mackerels hot with salad, lime wedges, rice and curry.
Notes
1. Ensure the masala paste is thick else the result won\'t be good.
2. If you aren\'t able to find kashmiri chilies then use bedgi chilies or kashmiri red chili powder.
3. You could use white vinegar or coconut vinegar.
4. Any left over paste could be stored in the fridge for future use.
5. Cinnamon could be avoided as it\'s a strong spice used generally for meat or chicken.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uwxusv1487344500.jpg',
                'tags' => '[40,9]',
                'youtube_url' => 'https://www.youtube.com/watch?v=FXtCris37nE',
                'ingredients' => '[479,243,27,55,102,31,30,74,73,125,23,480,373,17]',
                'measurements' => '[60,456,457,458,459,5,33,60,4,30,460,461,137]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            219 => 
            array (
                'id' => 220,
                'tmdb_id' => 52811,
                'name' => 'Ribollita',
                'category_id' => 4,
                'area_id' => 11,
                'instructions' => 'Put 2 tablespoons of the oil in a large pot over medium heat. When it’s hot, add onion, carrot, celery and garlic; sprinkle with salt and pepper and cook, stirring occasionally, until vegetables are soft, 5 to 10 minutes.
Heat the oven to 500 degrees. Drain the beans; if they’re canned, rinse them as well. Add them to the pot along with tomatoes and their juices and stock, rosemary and thyme. Bring to a boil, then reduce heat so the soup bubbles steadily; cover and cook, stirring once or twice to break up the tomatoes, until the flavors meld, 15 to 20 minutes.
Fish out and discard rosemary and thyme stems, if you like, and stir in kale. Taste and adjust seasoning. Lay bread slices on top of the stew so they cover the top and overlap as little as possible. Scatter red onion slices over the top, drizzle with the remaining 3 tablespoons oil and sprinkle with Parmesan.
Put the pot in the oven and bake until the bread, onions and cheese are browned and crisp, 10 to 15 minutes. (If your pot fits under the broiler, you can also brown the top there.) Divide the soup and bread among 4 bowls and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xrrwpx1487347049.jpg',
                'tags' => '[42]',
                'youtube_url' => 'https://www.youtube.com/watch?v=BiQUYTBb6eQ',
                'ingredients' => '[47,53,64,85,55,188,481,36,61,60,285,482,151,347]',
                'measurements' => '[180,140,140,462,463,61,32,167,464,464,465,466,431,467]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            220 => 
            array (
                'id' => 221,
                'tmdb_id' => 52816,
                'name' => 'Roasted Eggplant With Tahini, Pine Nuts, and Lentils',
                'category_id' => 4,
                'area_id' => 4,
                'instructions' => '
For the Lentils: Adjust oven rack to center position and preheat oven to 450°F to prepare for roasting eggplant. Meanwhile, heat 2 tablespoons olive oil in a medium saucepan over medium heat until shimmering. Add carrots, celery, and onion and cook, stirring, until softened but not browned, about 4 minutes. Add garlic and cook, stirring, until fragrant, about 30 seconds. Add lentils, bay leaves, stock or water, and a pinch of salt. Bring to a simmer, cover with the lid partially ajar, and cook until lentils are tender, about 30 minutes. (Top up with water if lentils are at any point not fully submerged.) Remove lid, stir in vinegar, and reduce until lentils are moist but not soupy. Season to taste with salt and pepper, cover, and keep warm until ready to serve.

2.
For the Eggplant: While lentils cook, cut each eggplant in half. Score flesh with the tip of a paring knife in a cross-hatch pattern at 1-inch intervals. Transfer to a foil-lined rimmed baking sheet, cut side up, and brush each eggplant half with 1 tablespoon oil, letting each brushstroke be fully absorbed before brushing with more. Season with salt and pepper. Place a rosemary sprig on top of each one. Transfer to oven and roast until completely tender and well charred, 25 to 35 minutes. Remove from oven and discard rosemary.

3.
To Serve: Heat 2 tablespoons olive oil and pine nuts in a medium skillet set over medium heat. Cook, tossing nuts frequently, until golden brown and aromatic, about 4 minutes. Transfer to a bowl to halt cooking. Stir half of parsley and rosemary into lentils and transfer to a serving platter. Arrange eggplant halves on top. Spread a few tablespoons of tahini sauce over each eggplant half and sprinkle with pine nuts. Sprinkle with remaining parsley and rosemary, drizzle with additional olive oil, and serve.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ysqrus1487425681.jpg',
                'tags' => '[42,52,41]',
                'youtube_url' => 'https://www.youtube.com/watch?v=HkywCtna9t0',
                'ingredients' => '[47,64,85,53,55,402,62,36,21,483,102,316,61,484,83]',
                'measurements' => '[193,468,469,386,470,471,4,167,95,472,95,161,328,163,193]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            221 => 
            array (
                'id' => 222,
                'tmdb_id' => 52901,
                'name' => 'Rock Cakes',
                'category_id' => 1,
                'area_id' => 1,
                'instructions' => 'Preheat oven to 180C/350F/Gas 4 and line a baking tray with baking parchment.
Mix the flour, sugar and baking powder in a bowl and rub in the cubed butter until the mixture looks like breadcrumbs, then mix in the dried fruit.
In a clean bowl, beat the egg and milk together with the vanilla extract.
Add the egg mixture to the dry ingredients and stir with a spoon until the mixture just comes together as a thick, lumpy dough. Add a teaspoon more milk if you really need it to make the mixture stick together.
Place golfball-sized spoons of the mixture onto the prepared baking tray. Leave space between them as they will flatten and spread out to double their size during baking.
Bake for 15-20 minutes, until golden-brown. Remove from the oven, allow to cool for a couple of minutes then turn them out onto a wire rack to cool.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/tqrrsq1511723764.jpg',
                'tags' => '[2,19]',
                'youtube_url' => 'https://www.youtube.com/watch?v=tY3taZO3Aro',
                'ingredients' => '[113,5,20,2,276,18,16,94]',
                'measurements' => '[196,116,5,97,81,32,117,37]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            222 => 
            array (
                'id' => 223,
                'tmdb_id' => 52908,
                'name' => 'Ratatouille',
                'category_id' => 4,
                'area_id' => 7,
                'instructions' => 'Cut the aubergines in half lengthways. Place them on the board, cut side down, slice in half lengthways again and then across into 1.5cm chunks. Cut off the courgettes ends, then across into 1.5cm slices. Peel the peppers from stalk to bottom. Hold upright, cut around the stalk, then cut into 3 pieces. Cut away any membrane, then chop into bite-size chunks.
Score a small cross on the base of each tomato, then put them into a heatproof bowl. Pour boiling water over the tomatoes, leave for 20 secs, then remove. Pour the water away, replace the tomatoes and cover with cold water. Leave to cool, then peel the skin away. Quarter the tomatoes, scrape away the seeds with a spoon, then roughly chop the flesh.
Set a sauté pan over medium heat and when hot, pour in 2 tbsp olive oil. Brown the aubergines for 5 mins on each side until the pieces are soft. Set them aside and fry the courgettes in another tbsp oil for 5 mins, until golden on both sides. Repeat with the peppers. Don’t overcook the vegetables at this stage, as they have some more cooking left in the next step.
Tear up the basil leaves and set aside. Cook the onion in the pan for 5 mins. Add the garlic and fry for a further min. Stir in the vinegar and sugar, then tip in the tomatoes and half the basil. Return the vegetables to the pan with some salt and pepper and cook for 5 mins. Serve with basil.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wrpwuu1511786491.jpg',
                'tags' => '[69,20]',
                'youtube_url' => 'https://www.youtube.com/watch?v=BFdQUgAFtGU',
                'ingredients' => '[52,312,329,130,47,171,53,28,269,23]',
                'measurements' => '[161,60,4,147,143,409,87,239,5,5]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            223 => 
            array (
                'id' => 224,
                'tmdb_id' => 52933,
                'name' => 'Rappie Pie',
                'category_id' => 2,
                'area_id' => 8,
            'instructions' => 'Preheat oven to 400 degrees F (200 degrees C). Grease a 10x14x2-inch baking pan.
Heat margarine in a skillet over medium heat; stir in onion. Cook and stir until onion has softened and turned translucent, about 5 minutes. Reduce heat to low and continue to cook and stir until onion is very tender and dark brown, about 40 minutes more.
Bring chicken broth to a boil in a large pot; stir in chicken breasts, reduce heat, and simmer until chicken is no longer pink at the center, about 20 minutes. Remove from heat. Remove chicken breasts to a plate using a slotted spoon; reserve broth.
Juice potatoes with an electric juicer; place dry potato flesh into a bowl and discard juice. Stir salt and pepper into potatoes; stir in enough reserved broth to make the mixture the consistency of oatmeal. Set remaining broth aside.
Spread half of potato mixture evenly into the prepared pan. Lay cooked chicken breast evenly over potatoes; scatter caramelized onion evenly over chicken. Spread remaining potato mixture over onions and chicken to cover.
Bake in the preheated oven until golden brown, about 1 hour. Reheat chicken broth; pour over individual servings as desired.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ruwpww1511817242.jpg',
                'tags' => '[16]',
                'youtube_url' => 'https://www.youtube.com/watch?v=Ys2kZnTVXAM',
                'ingredients' => '[2,70,218,220,66,21,182]',
                'measurements' => '[25,101,473,130,474,25,80]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            224 => 
            array (
                'id' => 225,
                'tmdb_id' => 52941,
                'name' => 'Red Peas Soup',
                'category_id' => 3,
                'area_id' => 9,
                'instructions' => 'Wash and rinse the dried kidney beans.. then cover with water in a deep bowl. Remember as they soak they will expand to at least triple the size they were originally so add a lot of water to the bowl. Soak them overnight or for at least 2 hrs to make the cooking step go quicker. I tossed out the water they were soaked in after it did the job.

Have your butcher cut the salted pigtail into 2 inch pieces as it will be very difficult to cut with an ordinary kitchen knife. Wash, then place a deep pot with water and bring to a boil. Cook for 20 minutes, then drain + rinse and repeat (boil again in water). The goal is to make the pieces of pig tails tender and to remove most of the salt it was cured in.

Time to start the soup. Place everything in the pot (except the flour and potato), then cover with water and place on a high flame to bring to a boil. As it comes to a boil, skim off any scum/froth at the top and discard. Reduce the heat to a gentle boil and allow it to cook for 1 hr and 15 mins.. basically until the beans are tender and start falling apart.

It’s now time to add the potato (and Yams etc if you’re adding it) as well as the coconut milk and continue cooking for 15 minutes.

Now is a good time to start making the basic dough for the spinner dumplings. Mix the flour and water (add a pinch of salt if you want) until you have a soft/smooth dough. allow it to rest for 5 minutes, then pinch of a tablespoon at a time and roll between your hands to form a cigarette shape.

Add them to the pot, stir well and continue cooking for another 15 minutes on a rolling boil.

You’ll notice that I didn’t add any salt to the pot as the remaining salt from the salted pigtails will be enough to properly season this dish. However you can taste and adjust accordingly. Lets recap the timing part of things so you’re not confused. Cook the base of the soup for 1 hr and 15 minute or until tender, then add the potatoes and cook for 15 minutes, then add the dumplings and cook for a further 15 minutes. Keep in mind that this soup will thicken quite a bit as it cools.

While this is not a traditional recipe to any one specific island, versions of this soup (sometimes called stewed peas) can be found throughout the Caribbean, Latin America and Africa. A hearty bowl of this soup will surely give you the sleepies (some may call it ethnic fatigue). You can certainly freeze the leftovers and heat it up another day.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sqpqtp1515365614.jpg',
                'tags' => '[32,20]',
                'youtube_url' => 'https://www.youtube.com/watch?v=1ogCfDXotMw',
                'ingredients' => '[381,64,176,60,53,182,131,28,72,67,36,66,10,36,35]',
                'measurements' => '[61,50,101,328,165,17,101,63,117,177,475,60,27,163,27]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            225 => 
            array (
                'id' => 226,
                'tmdb_id' => 52942,
                'name' => 'Roast fennel and aubergine paella',
                'category_id' => 14,
                'area_id' => 29,
                'instructions' => '1 Put the fennel, aubergine, pepper and courgette in a roasting tray. Add a glug of olive oil, season with salt and pepper and toss around to coat the veggies in the oil. Roast in the oven for 20 minutes, turning a couple of times until the veg are pretty much cooked through and turning golden.

2 Meanwhile, heat a paella pan or large frying pan over a low– medium heat and add a glug of olive oil. Sauté the onion for 8–10 minutes until softened. Increase the heat to medium and stir in the rice, paprika and saffron. Cook for around 1 minute to start toasting the rice, then add the white wine. Reduce by about half before stirring in two-thirds of the stock. Reduce to a simmer and cook for 10 minutes without a lid, stirring a couple of times.

3 Stir in the peas, add some seasoning, then gently mix in the roasted veg. Pour over the remaining stock, arrange the lemon wedges on top and cover with a lid or some aluminium foil. Cook for a further 10 minutes.

4 To ensure you get the classic layer of toasted rice at the bottom of the pan, increase the heat to high until you hear a slight crackle. Remove from the heat and sit for 5 minutes before sprinkling over the parsley and serving.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1520081754.jpg',
                'tags' => '[70,71]',
                'youtube_url' => 'https://www.youtube.com/watch?v=H5SmjR-fxUs',
                'ingredients' => '[485,33,131,312,53,486,167,397,214,87,487,109,83,21,182]',
                'measurements' => '[476,477,431,87,85,9,5,95,13,153,121,140,245,95,95]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            226 => 
            array (
                'id' => 227,
                'tmdb_id' => 53020,
            'name' => 'Rosol (Polish Chicken Soup)',
                'category_id' => 2,
                'area_id' => 14,
                'instructions' => 'Add chicken to a large Dutch oven or stock pot 
Cover with water
Bring to a boil and simmer for 2 to 2 1/2 hours, skimming any impurities off the top to insure a clear broth
If your pot is big enough, add the vegetables and spices for the last hour of the cooking time
My Dutch oven wasn’t big enough to hold everything, just the chicken and other bones filled the pot, so I cooked the meat/bones for the full cooking time, then removed them, and cooked the vegetables and spices separately
Strain everything out of the broth
Bone the chicken, pulling the meat into large chunks
Slice the carrots
Return the chicken and carrots to the broth
Cook noodles according to package instructions if you’re using them
Add noodles to bowl and then top with hot soup',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/lx1kkj1593349302.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=AU60fxyxXGw',
                'ingredients' => '[239,70,64,86,85,169,73,72,99,83,189,102,21]',
                'measurements' => '[352,161,478,140,284,160,139,479,4,328,328,5,117]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            227 => 
            array (
                'id' => 228,
                'tmdb_id' => 53024,
            'name' => 'Rogaliki (Polish Croissant Cookies)',
                'category_id' => 1,
                'area_id' => 14,
                'instructions' => 'In a medium bowl mix egg yolks, philly cheese and baking powder using a hand held mixer. Carefully start adding the flour. When the mixture will not be mixing well, and will look like wood chips, put away the blending mixer and using your hands knead the dough.
Create a roll and cover in foil and freeze for 15 minutes. At this time preheat the oven to 375.
Take the dough out and separate into two. Roll and cut out 3 inch trangles.
Make as many as you can and on centre of each put a small spoon of jam. Roll them into a croissant shape.
Place the croissants onto a greased cookie sheet, and bake for 10-12 minutes or until golden.
Repeat with the rest of the dough.
When you take them out, put aside and sprinkle with powdered sugar on top.
This makes about 3 batches of 20 cookies each.
Total count about 60 cookies.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/7mxnzz1593350801.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=VAR10T9mfhU',
                'ingredients' => '[2,51,262,20,19,488]',
                'measurements' => '[27,57,268,5,186,92]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            228 => 
            array (
                'id' => 229,
                'tmdb_id' => 53052,
                'name' => 'Roti john',
                'category_id' => 3,
                'area_id' => 2,
                'instructions' => 'Mix all the ingredients in a bowl.
Heat a pan or griddle with a little vegetable oil.
Pour the mixture onto the pan and place a piece of open-faced baguette on top.
Press on the bread with a spatula and grill for 2 minutes.
Turn the bread over to make it a little crispy.
Remove from pan and cut the bread into small portions.
Add mayonnaise and/or Sambal before cutting the sandwich (optional).',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/hx335q1619789561.jpg',
                'tags' => '[]',
                'youtube_url' => 'https://www.youtube.com/watch?v=cl4YH8wblRs',
                'ingredients' => '[158,53,18,393,474,21,102,163]',
                'measurements' => '[144,32,57,117,142,152,152,413]',
                'created_at' => '2025-04-15 09:39:29',
                'updated_at' => '2025-04-15 09:39:29',
            ),
            229 => 
            array (
                'id' => 230,
                'tmdb_id' => 52770,
                'name' => 'Spaghetti Bolognese',
                'category_id' => 3,
                'area_id' => 11,
                'instructions' => 'Put the onion and oil in a large pan and fry over a fairly high heat for 3-4 mins. Add the garlic and mince and fry until they both brown. Add the mushrooms and herbs, and cook for another couple of mins.

Stir in the tomatoes, beef stock, tomato ketchup or purée, Worcestershire sauce and seasoning. Bring to the boil, then reduce the heat, cover and simmer, stirring occasionally, for 30 mins.

Meanwhile, cook the spaghetti in a large pan of boiling, salted water, according to packet instructions. Drain well, run hot water through it, put it back in the pan and add a dash of olive oil, if you like, then stir in the meat sauce. Serve in hot bowls and hand round Parmesan cheese, for sprinkling on top.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sutysw1468247559.jpg',
                'tags' => '[39,7]',
                'youtube_url' => 'https://www.youtube.com/watch?v=-gF8d-fitkU',
                'ingredients' => '[70,47,55,489,45,365,54,490,123,175,457,347]',
                'measurements' => '[4,80,78,47,480,479,481,118,80,80,122,83]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            230 => 
            array (
                'id' => 231,
                'tmdb_id' => 52771,
                'name' => 'Spicy Arrabiata Penne',
                'category_id' => 4,
                'area_id' => 11,
                'instructions' => 'Bring a large pot of water to a boil. Add kosher salt to the boiling water, then add the pasta. Cook according to the package instructions, about 9 minutes.
In a large skillet over medium-high heat, add the olive oil and heat until the oil starts to shimmer. Add the garlic and cook, stirring, until fragrant, 1 to 2 minutes. Add the chopped tomatoes, red chile flakes, Italian seasoning and salt and pepper to taste. Bring to a boil and cook for 5 minutes. Remove from the heat and add the chopped basil.
Drain the pasta and add it to the sauce. Garnish with Parmigiano-Reggiano flakes and more basil and serve warm.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ustsqw1468250014.jpg',
                'tags' => '[39,48]',
                'youtube_url' => 'https://www.youtube.com/watch?v=1IszT_guI08',
                'ingredients' => '[491,47,55,249,398,492,171,493]',
                'measurements' => '[482,163,176,483,210,210,484,485]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            231 => 
            array (
                'id' => 232,
                'tmdb_id' => 52784,
                'name' => 'Smoky Lentil Chili with Squash',
                'category_id' => 4,
                'area_id' => 1,
            'instructions' => 'Begin by roasting the squash. Slice it into thin crescents and drizzle with a little oil and sprinkle with sea salt. I added a fresh little sage I had in the fridge, but it’s unnecessary. Roast the squash a 205 C (400 F) for 20-30 minutes, flipping halfway through, until soft and golden. Let cool and chop into cubes.
Meanwhile, rinse the lentils and cover them with water. Bring them to the boil then turn down to a simmer and let cook (uncovered) for 20-30 minutes, or until tender. Drain and set aside.
While the lentils are cooking heat the 1 Tbsp. of oil on low in a medium pot. Add the onions and leeks and sauté for 5 or so minutes, or until they begin to soften. Add the garlic next along with the cumin and coriander, cooking for a few more minutes. Add the remaining spices – paprika, cinnamon, chilli, cocoa, Worcestershire sauce, salt, and oregano. Next add the can of tomatoes, the water or stock, and carrots. Let simmer, covered, for 20 minutes or until the veg is tender and the mixture has thickened up. You’ll need to check on the pot periodically for a stir and a top of of liquid if needed.
Add the lentils and chopped roasted squash. Let cook for 10 more minutes to heat through.
Serve with sliced jalapeno, lime wedges, cilantro, green onions, and cashew sour cream.

SIMPLE CASHEW SOUR CREAM

1 Cup Raw Unsalted Cashews
Pinch Sea Salt
1 tsp. Apple Cider Vinegar
Water

Bring some water to the boil, and use it to soak the cashews for at least four hours. Alternatively, you can use cold water and let the cashews soak overnight, but I’m forgetful/lazy, so often use the boil method which is much faster.
After the cashews have soaked, drain them and add to a high speed blender. Begin to puree, slowly adding about 1/2 cup fresh water, until a creamy consistency is reached. You may need to add less or more water to reach the desired consistency.
Add a pinch of sea salt and vinegar (or lemon juice).',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uwxqwy1483389553.jpg',
                'tags' => '[52]',
                'youtube_url' => 'https://www.youtube.com/watch?v=pKmqawK2Tqs',
                'ingredients' => '[47,53,86,55,31,32,230,14,289,268,365,174,36,64,402,261,212,494,483]',
                'measurements' => '[77,32,140,176,486,338,5,17,5,5,17,26,186,164,314,5,284,27,5]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            232 => 
            array (
                'id' => 233,
                'tmdb_id' => 52793,
                'name' => 'Sticky Toffee Pudding Ultimate',
                'category_id' => 1,
                'area_id' => 1,
            'instructions' => 'Stone and chop the dates quite small, put them in a bowl, then pour the boiling water over. Leave for about 30 mins until cool and well-soaked, then mash a bit with a fork. Stir in the vanilla extract. Butter and flour seven mini pudding tins (each about 200ml/7fl oz) and sit them on a baking sheet. Heat oven to 180C/fan 160C/gas 4.
While the dates are soaking, make the puddings. Mix the flour and bicarbonate of soda together and beat the eggs in a separate bowl. Beat the butter and sugar together in a large bowl for a few mins until slightly creamy (the mixture will be grainy from the sugar). Add the eggs a little at a time, beating well between additions. Beat in the black treacle then, using a large metal spoon, gently fold in one-third of the flour, then half the milk, being careful not to overbeat. Repeat until all the flour and milk is used. Stir the soaked dates into the pudding batter. The mix may look a little curdled at this point and will be like a soft, thick batter. Spoon it evenly between the tins and bake for 20-25 mins, until risen and firm.
Meanwhile, put the sugar and butter for the sauce in a medium saucepan with half the cream. Bring to the boil over a medium heat, stirring all the time, until the sugar has completely dissolved. Stir in the black treacle, turn up the heat slightly and let the mixture bubble away for 2-3 mins until it is a rich toffee colour, stirring occasionally to make sure it doesn’t burn. Take the pan off the heat and beat in the rest of the cream.
Remove the puddings from the oven. Leave in the tins for a few mins, then loosen them well from the sides of the tins with a small palette knife before turning them out. You can serve them now with the sauce drizzled over, but they’ll be even stickier if left for a day or two coated in the sauce. To do this, pour about half the sauce into one or two ovenproof serving dishes. Sit the upturned puddings on the sauce, then pour the rest of the sauce over them. Cover with a loose tent of foil so that the sauce doesn’t smudge (no need to chill).
When ready to serve, heat oven to 180C/fan 160C/gas 4. Warm the puddings through, still covered, for 15-20 mins or until the sauce is bubbling. Serve them on their own, or with cream or custard.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xrptpq1483909204.jpg',
                'tags' => '[4,14,19,18]',
                'youtube_url' => 'https://www.youtube.com/watch?v=hKq6RbxJHBo',
                'ingredients' => '[495,36,94,113,178,18,2,12,92,16,15,280,2,43,92]',
                'measurements' => '[196,487,5,100,5,4,276,67,75,82,488,100,113,489,30]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            233 => 
            array (
                'id' => 234,
                'tmdb_id' => 52797,
                'name' => 'Spicy North African Potato Salad',
                'category_id' => 4,
                'area_id' => 20,
                'instructions' => 'Cook potatoes - place potatoes in a pot of cold water, and bring to the boil. Boil 20 minutes, or until potatoes are tender. You know they are cooked when you can stick a knife in them and the knife goes straight through.
Combine harissa spice, olive oil, salt and pepper and lemon juice in a small bowl and whisk until combined.
Once potatoes are cooked, drain water and roughly chop potatoes in half.
Add harissa mix and spring onions/green onions to potatoes and stir.
In a large salad bowl, lay out arugula/rocket.
Top with potato mix and toss.
Add fetta, mint and sprinkle over pine nuts.
Adjust salt and pepper to taste.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/urtwux1486983078.jpg',
                'tags' => '[42,9]',
                'youtube_url' => 'https://www.youtube.com/watch?v=zxBzwJvTK4g',
                'ingredients' => '[302,255,47,109,176,469,306,112,484,21,102]',
                'measurements' => '[490,5,37,491,60,492,493,494,193,95,95]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            234 => 
            array (
                'id' => 235,
                'tmdb_id' => 52817,
                'name' => 'Stovetop Eggplant With Harissa, Chickpeas, and Cumin Yogurt',
                'category_id' => 4,
                'area_id' => 4,
            'instructions' => 'Heat the oil in a 12-inch skillet over high heat until shimmering. Add the eggplants and lower the heat to medium. Season with salt and pepper as you rotate the eggplants, browning them on all sides. Continue to cook, turning regularly, until a fork inserted into the eggplant meets no resistance (you may have to stand them up on their fat end to finish cooking the thickest parts), about 20 minutes, lowering the heat and sprinkling water into the pan as necessary if the eggplants threaten to burn or smoke excessively.

2.
Mix the harissa, chickpeas and tomatoes together, then add to the eggplants. Cook until the tomatoes have blistered and broken down, about 5 minutes more. Season with salt and pepper and add water as necessary to thin to a saucy consistency. Meanwhile, combine the yogurt and cumin in a serving bowl. Season with salt and pepper.

3.
Top the eggplant mixture with the parsley, drizzle with more extra virgin olive oil, and serve with the yogurt on the side.',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yqwtvu1487426027.jpg',
                'tags' => '[42]',
                'youtube_url' => 'https://www.youtube.com/watch?v=uYB-1xJp4lg',
                'ingredients' => '[47,316,255,257,143,374,496,83]',
                'measurements' => '[330,476,495,26,496,314,226,51]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            235 => 
            array (
                'id' => 236,
                'tmdb_id' => 52823,
                'name' => 'Salmon Prawn Risotto',
                'category_id' => 8,
                'area_id' => 11,
                'instructions' => 'Melt the butter in a thick-based pan and gently cook the onion without colour until it is soft.
Add the rice and stir to coat all the grains in the butter
Add the wine and cook gently stirring until it is absorbed
Gradually add the hot stock, stirring until each addition is absorbed. Keep stirring until the rice is tender
Season with the lemon juice and zest, and pepper to taste. (there will probably be sufficient saltiness from the salmon to not need to add salt) Stir gently to heat through
Serve scattered with the Parmesan and seasonal vegetables.
Grill the salmon and gently place onto the risotto with the prawns and asparagus',
                'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xxrxux1503070723.jpg',
                'tags' => '[40]',
                'youtube_url' => 'https://www.youtube.com/watch?v=V2PMvBv52IE',
                'ingredients' => '[2,53,155,214,87,109,244,144,497,182,347]',
                'measurements' => '[36,85,81,402,89,497,498,81,499,337,500]',
                'created_at' => '2025-04-15 09:39:30',
                'updated_at' => '2025-04-15 09:39:30',
            ),
            236 => 
            array (
                'id' => 237,
                'tmdb_id' => 52833,
                'name' => 'Salted Caramel Cheescake',
                'category_id' => 1,
                'area_id' => 4,
            'instructions' => '1) Blitz the biscuits and the pretzels in a food processor and mix the biscuits with the melted butter. Spread on the bottom of an 8″/20cm Deep Springform Tin and press down firmly. Leave to set in the fridge whilst you make the rest!

2) Using an electric mixer, I use my KitchenAid with the whisk attachment, whisk together the cream cheese, vanilla, and icing sugar until smooth and then add the caramel and whisk again until smooth and lump free – this could take a couple of minutes, I whisk it at half speed so not too quick or slow!

3) Pour in the double cream & Salt flakes and continue to whisk for a couple of minutes until its very thick and mousse like (I mix it on a medium speed, level 6/10) – Now this could take up to 5 minutes depending on your mixer, but you seriously have to stick at it – it will hold itself completely when finished mixing (like a meringue does!) If you don’t mix it enough it will not set well enough, but don’t get impatient and whisk it really quick because that’ll make it split! Spread over the biscuit base and leave to set in the fridge overnight.

4) Remove the Cheesecake from the tin carefully and decorate the cheesecake – I drizzled over some of the spare caramel, and then some Toffee Popcorn and more Pretzels!',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xqrwyr1511133646.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=q5dQp3qpmI4',
    'ingredients' => '[1,498,2,262,94,118,499,261,43,500,501,498]',
    'measurements' => '[79,116,501,353,479,121,81,479,118,262,413,413]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
237 => 
array (
    'id' => 238,
    'tmdb_id' => 52836,
    'name' => 'Seafood fideuà',
    'category_id' => 8,
    'area_id' => 29,
    'instructions' => 'Boil the kettle. Empty the mussels into a colander and run under cold water. Throw away any with broken shells. Pick through the shells, tapping each one on the side of the sink – they should be closed or should slowly close when tapped – if they stay open, throw them away. If any of the shells still have barnacles or stringy beards attached, pull them off with a cutlery knife and rinse the shells well. Keep in the colander, covered with a cold, damp cloth, until you’re ready to cook. Peel the prawn shells on the body section only – leave the heads and tails intact. Score down the backs and pull out any gritty entrails. Chill until you’re ready to cook.
Put the saffron in a small cup, cover with 50ml kettle-hot water and set aside for 10 mins. If using vermicelli, put in a bowl and crush to little pieces (about 1cm long) with your hands.
Heat the oil in a large frying pan with at least a 3cm lip, or a 40cm paella pan. Add the onion and stir around the pan for 5 mins until soft. Add the garlic and cook for 1 min more, then tip in the vermicelli and cook for 5 mins, stirring from time to time, until the vermicelli is toasted brown. Stir in the paprika.
Keeping the heat moderate, stir through the monkfish, squid and saffron with its water, seasoning well. Spread the ingredients out in an even layer, then pour over the hot stock and scatter the tomatoes on top. Bring to a simmer, then cover the whole dish with a tight-fitting lid (or foil). Turn the heat to medium and cook for 6 mins.
Uncover and stir to incorporate the dry top layer of pasta. Push the mussels into the pasta so the hinges are buried in the bottom of the dish, and they stand straight up. Arrange the prawns on top, cover tightly and cook for another 6 mins or until the mussels are open, the prawns are pink and the pasta is cooked through. Leave to simmer for another 2-3 mins to cook off most of the remaining liquid (leave a little in the pan to prevent the pasta from sticking together). Allow to sit for 2-3 mins, then squeeze over the lemon juice and arrange the wedges on top. Scatter with parsley before serving.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wqqvyq1511179730.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=itsFEc8W468',
    'ingredients' => '[351,340,397,502,47,70,55,167,503,504,350,54,109,83]',
    'measurements' => '[42,24,436,122,249,50,176,25,502,60,503,161,146,83]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
238 => 
array (
    'id' => 239,
    'tmdb_id' => 52849,
    'name' => 'Spinach & Ricotta Cannelloni',
    'category_id' => 4,
    'area_id' => 11,
'instructions' => 'First make the tomato sauce. Heat the oil in a large pan and fry the garlic for 1 min. Add the sugar, vinegar, tomatoes and some seasoning and simmer for 20 mins, stirring occasionally, until thick. Add the basil and divide the sauce between 2 or more shallow ovenproof dishes (see Tips for freezing, below). Set aside. Make a sauce by beating the mascarpone with the milk until smooth, season, then set aside.

Put the spinach in a large colander and pour over a kettle of boiling water to wilt it (you may need to do this in batches). When cool enough to handle squeeze out the excess water. Roughly chop the spinach and mix in a large bowl with 100g Parmesan and ricotta. Season well with salt, pepper and the nutmeg.

Heat oven to 200C/180C fan/gas 6. Using a piping bag or plastic food bag with the corner snipped off, squeeze the filling into the cannelloni tubes. Lay the tubes, side by side, on top of the tomato sauce and spoon over the mascarpone sauce. Top with Parmesan and mozzarella. You can now freeze the cannelloni, uncooked, or you can cook it first and then freeze. Bake for 30-35 mins until golden and bubbling. Remove from oven and let stand for 5 mins before serving.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wspuvp1511303478.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=rYGaEJjyLQA',
    'ingredients' => '[47,55,5,269,249,245,296,16,347,315,454,347,146,44,188]',
    'measurements' => '[73,200,73,84,504,409,505,73,276,123,69,121,506,95,42]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
239 => 
array (
    'id' => 240,
    'tmdb_id' => 52866,
    'name' => 'Squash linguine',
    'category_id' => 4,
    'area_id' => 11,
    'instructions' => 'Heat oven to 200C/180C fan/gas 6. Put the squash and garlic on a baking tray and drizzle with the olive oil. Roast for 35-40 mins until soft. Season.
Cook the pasta according to pack instructions. Drain, reserving the water. Use a stick blender to whizz the squash with 400ml cooking water. Heat some oil in a frying pan, fry the sage until crisp, then drain on kitchen paper. Tip the pasta and sauce into the pan and warm through. Scatter with sage.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wxswxy1511452625.jpg',
    'tags' => '[39,63]',
    'youtube_url' => 'https://www.youtube.com/watch?v=xHZ-PoGwTLQ',
    'ingredients' => '[416,55,47,241,388]',
    'measurements' => '[122,181,20,122,404]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
240 => 
array (
    'id' => 241,
    'tmdb_id' => 52872,
    'name' => 'Spanish Tortilla',
    'category_id' => 4,
    'area_id' => 29,
    'instructions' => 'Put a large non-stick frying pan on a low heat. Cook the onion slowly in the oil and butter until soft but not brown – this should take about 15 mins. Add the potatoes, cover the pan and cook for a further 15-20 mins, stirring occasionally to make sure they fry evenly.
When the potatoes are soft and the onion is shiny, crush 2 garlic cloves and stir in, followed by the beaten eggs.
Put the lid back on the pan and leave the tortilla to cook gently. After 20 mins, the edges and base should be golden, the top set but the middle still a little wobbly. To turn it over, slide it onto a plate and put another plate on top, turn the whole thing over and slide it back into the pan to finish cooking. Once cooked, transfer to a plate and serve the tortilla warm or cold, scattered with the chopped parsley.
To accompany, take slices of warmed baguette, stab all over with a fork and rub with the remaining garlic, pile on grated tomatoes and season with sea salt and a drizzle of olive oil.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/quuxsx1511476154.jpg',
    'tags' => '[55,63]',
    'youtube_url' => 'https://www.youtube.com/watch?v=JceGMNG7rpU',
    'ingredients' => '[53,47,2,66,55,18,83,474,505,47]',
    'measurements' => '[86,257,18,42,52,24,245,32,60,262]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
241 => 
array (
    'id' => 242,
    'tmdb_id' => 52881,
    'name' => 'Steak and Kidney Pie',
    'category_id' => 3,
    'area_id' => 1,
    'instructions' => 'Preheat the oven to 220C/425F/Gas 7
Heat the vegetable oil in a large frying pan, and brown the beef all over. (You may need to do this in batches.) Set aside, then brown the kidneys on both sides in the same pan. Add the onions and cook for 3-4 minutes.
Return the beef to the pan, sprinkle flour over and coat the meat and onions
Add the stock to the pan, stir well and bring to the boil.
Turn the heat down and simmer for 1½ hours without a lid. If the liquid evaporates too much, add more stock.
Remove from the heat. Add salt, pepper and Worcestershire sauce and allow to cool completely. Place the cooked meat mixture into a pie dish.
Roll out the pastry to 5mm/¼in thick and 5cm/2in larger than the dish you are using.
Using a rolling pin, lift the pastry and place it over the top of the pie dish. Trim and crimp the edges with your fingers and thumb.
Brush the surface with the beaten egg mixture and bake for 30-40 minutes until golden-brown and puffed.
Serve with creamy mash and steamed vegetables to soak up the gravy.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qysyss1511558054.jpg',
    'tags' => '[16]',
    'youtube_url' => 'https://www.youtube.com/watch?v=oTw5tPt4KmA',
    'ingredients' => '[50,177,51,135,67,419,70,10,63,21,102,175]',
    'measurements' => '[9,407,407,25,507,102,101,10,508,95,95,44]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
242 => 
array (
    'id' => 243,
    'tmdb_id' => 52883,
    'name' => 'Sticky Toffee Pudding',
    'category_id' => 1,
    'area_id' => 1,
    'instructions' => 'Preheat the oven to 180C/160C Fan/Gas 4. Butter a wide shallow 1.7-litre/3-pint ovenproof dish.
Put the butter, sugar, eggs, flour, baking powder, bicarbonate of soda and treacle into a mixing bowl. Beat using an electric handheld whisk for about 30 seconds or until combined. Pour in the milk gradually and whisk again until smooth. Pour into the prepared dish. Bake for 35–40 minutes or until well risen and springy in the centre.
To make the sauce, put all the ingredients into a saucepan and stir over a low heat until the sugar has dissolved and the butter has melted. Bring to the boil, stirring for a minute.
To serve, pour half the sauce over the pudding in the baking dish. Serve with the cream or ice cream.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xqqqtu1511637379.jpg',
    'tags' => '[4,19,14]',
    'youtube_url' => 'https://www.youtube.com/watch?v=Wytv3bjqJII',
    'ingredients' => '[2,280,18,113,20,178,92,16,43,2,280,92,43,94]',
    'measurements' => '[121,100,161,196,5,5,20,432,12,121,97,117,118,5]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
243 => 
array (
    'id' => 244,
    'tmdb_id' => 52886,
    'name' => 'Spotted Dick',
    'category_id' => 1,
    'area_id' => 1,
    'instructions' => 'Put the flour and salt in a bowl. Add the suet, currants, sugar, lemon and orange zest.
Pour in 150ml milk and mix to a firm but moist dough, adding the extra milk if necessary.
Shape into a fat roll about 20cm long. Place on a large rectangle of baking parchment. Wrap loosely to allow for the pudding to rise and tie the ends with string like a Christmas cracker.
Place a steamer over a large pan of boiling water, add the pudding to the steamer, cover and steam for 1 1/2 hours. Top up the pan with water from time to time.
Remove from the steamer and allow to cool slightly before unwrapping. Serve sliced with custard.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xqvyqr1511638875.jpg',
    'tags' => '[3,4,14]',
    'youtube_url' => 'https://www.youtube.com/watch?v=fu15XOF-ros',
    'ingredients' => '[113,21,100,299,5,109,202,16,295]',
    'measurements' => '[79,95,97,100,437,197,197,103,12]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
244 => 
array (
    'id' => 245,
    'tmdb_id' => 52889,
    'name' => 'Summer Pudding',
    'category_id' => 1,
    'area_id' => 1,
'instructions' => 'Bring out the juices: Wash fruit and gently dry on kitchen paper – keep strawberries separate. Put sugar and 3 tbsp water into a large pan. Gently heat until sugar dissolves – stir a few times. Bring to a boil for 1 min, then tip in the fruit (not strawberries). Cook for 3 mins over a low heat, stirring 2-3 times. The fruit will be softened, mostly intact and surrounded by dark red juice. Put a sieve over a bowl and tip in the fruit and juice.
Line the bowl with cling film and prepare the bread: Line the 1.25-litre basin with cling film as this will help you to turn out the pudding. Overlap two pieces of cling film in the middle of the bowl as it’s easier than trying to get one sheet to stick to all of the curves. Let the edges overhang by about 15cm. Cut the crusts off the bread. Cut 4 pieces of bread in half, a little on an angle, to give 2 lopsided rectangles per piece. Cut 2 slices into 4 triangles each and leave the final piece whole.
Build the pud: Dip the whole piece of bread into the juice for a few secs just to coat. Push this into the bottom of the basin. Now dip the wonky rectangular pieces one at a time and press around the basin’s sides so that they fit together neatly, alternately placing wide and narrow ends up. If you can’t quite fit the last piece of bread in it doesn’t matter, just trim into a triangle, dip in juice and slot in. Now spoon in the softened fruit, adding the strawberries here and there as you go.
Let flavours mingle then serve: Dip the bread triangles in juice and place on top – trim off overhang with scissors. Keep leftover juice for later. Bring cling film up and loosely seal. Put a side plate on top and weight down with cans. Chill for 6 hrs or overnight. To serve, open out cling film then put a serving plate upside-down on top and flip over. serve with leftover juice, any extra berries and cream.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rsqwus1511640214.jpg',
    'tags' => '[17]',
    'youtube_url' => 'https://www.youtube.com/watch?v=akJIO6UhXtA',
    'ingredients' => '[324,13,506,96,5,41]',
    'measurements' => '[9,79,121,47,100,509]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
245 => 
array (
    'id' => 246,
    'tmdb_id' => 52911,
    'name' => 'Summer Pistou',
    'category_id' => 4,
    'area_id' => 7,
    'instructions' => 'Heat the oil in a large pan and fry the leeks and courgette for 5 mins to soften. Pour in the stock, add three-quarters of the haricot beans with the green beans, half the tomatoes, and simmer for 5-8 mins until the vegetables are tender.
Meanwhile, blitz the remaining beans and tomatoes, the garlic and basil in a food processor (or in a bowl with a stick blender) until smooth, then stir in the Parmesan. Stir the sauce into the soup, cook for 1 min, then ladle half into bowls or pour into a flask for a packed lunch. Chill the remainder. Will keep for a couple of days.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rqtxvr1511792990.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=fyeqZJKEXp0',
    'ingredients' => '[84,86,312,87,188,101,54,28,171,347]',
    'measurements' => '[117,129,50,306,42,102,164,164,510,175]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
246 => 
array (
    'id' => 247,
    'tmdb_id' => 52925,
    'name' => 'Split Pea Soup',
    'category_id' => 7,
    'area_id' => 8,
    'instructions' => 'Put the gammon in a very large pan with 2 litres water and bring to the boil. Remove from the heat and drain off the water – this helps to get rid of some of the saltiness. Recover with 2 litres cold water and bring to the boil again. Put everything but the frozen peas into the pan and bring to the boil. Reduce to a simmer and cook for 1½-2½ hrs, topping up the water as and when you need to, to a similar level it started at. As the ham cooks and softens, you can halve it if you want, so it is all submerged under the liquid. When the ham is tender enough to pull into shreds, it is ready.
Lift out the ham, peel off and discard the skin. While it is still hot (wear a clean pair of rubber gloves), shred the meat. Remove bay from the soup and stir in the frozen peas. Simmer for 1 min, then blend until smooth. Add a splash of water if too thick, and return to the pan to heat through if it has cooled, or if you are making ahead.
When you are ready to serve, mix the hot soup with most of the ham – gently reheat if made ahead. Serve in bowls with the remaining ham scattered on top, and eat with crusty bread and butter.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/xxtsvx1511814083.jpg',
    'tags' => '[32,59]',
    'youtube_url' => 'https://www.youtube.com/watch?v=qdhWz7qAaCU',
    'ingredients' => '[270,332,70,64,62,85,487,41]',
    'measurements' => '[69,511,101,101,4,140,9,12]',
    'created_at' => '2025-04-15 09:39:30',
    'updated_at' => '2025-04-15 09:39:30',
),
247 => 
array (
    'id' => 248,
    'tmdb_id' => 52931,
    'name' => 'Sugar Pie',
    'category_id' => 1,
    'area_id' => 8,
'instructions' => 'Preheat oven to 350 degrees F (175 degrees C). Grease a 9-inch pie dish.
Place the brown sugar and butter in a mixing bowl, and beat them together with an electric mixer until creamy and very well combined, without lumps. Beat in eggs, one at a time, incorporating the first egg before adding the next one. Add the vanilla extract and salt; beat the flour in, a little at a time, and then the milk, making a creamy batter. Pour the batter into the prepared pie dish.
Bake in the preheated oven for 35 minutes; remove pie, and cover the rim with aluminum foil to prevent burning. Return to oven, and bake until the middle sets and the top forms a crusty layer, about 15 more minutes. Let the pie cool to room temperature, then refrigerate for at least 1 hour before serving.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yrstur1511816601.jpg',
    'tags' => '[16,14]',
    'youtube_url' => 'https://www.youtube.com/watch?v=uVQ66jiL-Dc',
    'ingredients' => '[275,2,18,94,21,10,16]',
    'measurements' => '[61,201,4,5,5,51,314]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
248 => 
array (
    'id' => 249,
    'tmdb_id' => 52935,
    'name' => 'Steak Diane',
    'category_id' => 3,
    'area_id' => 7,
    'instructions' => 'Heat oil in a 12" skillet over medium-high heat. Season steaks with salt and pepper, and add to skillet; cook, turning once, until browned on both sides and cooked to desired doneness, about 4 to 5 minutes for medium-rare. Transfer steaks to a plate, and set aside.
Return skillet to high heat, and add stock; cook until reduced until to 1⁄2 cup, about 10 minutes. Pour into a bowl, and set aside. Return skillet to heat, and add butter; add garlic and shallots, and cook, stirring, until soft, about 2 minutes. Add mushrooms, and cook, stirring, until they release any liquid and it evaporates and mushrooms begin to brown, about 2 minutes. Add cognac, and light with a match to flambée; cook until flame dies down. Stir in reserved stock, cream, Dijon, Worcestershire, and hot sauce, and then return steaks to skillet; cook, turning in sauce, until warmed through and sauce is thickened, about 4 minutes. Transfer steak to serving plates and stir parsley and chives into sauce; pour sauce over steaks to serve.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vussxq1511882648.jpg',
    'tags' => '[58,72,7,12,35]',
    'youtube_url' => 'https://www.youtube.com/watch?v=9rWZNHkrsNg',
    'ingredients' => '[400,48,63,2,55,26,45,240,215,507,175,508,83,349,21,102]',
    'measurements' => '[25,60,166,25,99,386,297,201,201,117,117,44,512,512,152,152]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
249 => 
array (
    'id' => 250,
    'tmdb_id' => 52936,
    'name' => 'Saltfish and Ackee',
    'category_id' => 8,
    'area_id' => 9,
    'instructions' => 'For the saltfish, soak the salt cod overnight, changing the water a couple of times.
Drain, then put the cod in a large pan of fresh water and bring to the boil. Drain again, add fresh water and bring to the boil again.
Simmer for about five minutes, or until cooked through, then drain and flake the fish into large pieces. Discard any skin or bones.
For the dumplings, mix the flour and suet with a pinch of salt and 250ml/9fl oz water to make a dough.
Wrap the mixture in clingfilm and leave in the fridge to rest.
Open the can of ackee, drain and rinse, then set aside.
Heat a tablespoon of olive oil in a pan and fry the onion until softened but not brown.
Add the spices, seasoning, pepper sauce and sliced peppers and continue to fry until the peppers are tender.
Add the chopped tomatoes, then the salt cod and mix together. Lastly stir in the ackee very gently and leave to simmer until ready to serve.
When you’re almost ready to eat, heat about 1cm/½in vegetable oil in a frying pan and heat until just smoking.
Shape the dumpling mix into plum-size balls and shallow-fry until golden-brown. (CAUTION: hot oil can be dangerous. Do not leave the pan unattended.)
Drain the dumplings on kitchen paper and serve with the saltfish and ackee.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vytypy1511883765.jpg',
    'tags' => '[22]',
    'youtube_url' => 'https://www.youtube.com/watch?v=nbfNyZbdn2I',
    'ingredients' => '[509,510,53,167,382,339,154,131,329,54,21,102,113,100,21,47]',
    'measurements' => '[353,42,140,5,37,37,5,86,86,102,152,152,79,10,95,137]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
250 => 
array (
    'id' => 251,
    'tmdb_id' => 52949,
    'name' => 'Sweet and Sour Pork',
    'category_id' => 10,
    'area_id' => 10,
    'instructions' => 'Preparation
1. Crack the egg into a bowl. Separate the egg white and yolk.

Sweet and Sour Pork
2. Slice the pork tenderloin into strips.

3. Prepare the marinade using a pinch of salt, one teaspoon of starch, two teaspoons of light soy sauce, and an egg white.

4. Marinade the pork strips for about 20 minutes.

5. Put the remaining starch in a bowl. Add some water and vinegar to make a starchy sauce.

Sweet and Sour Pork
Cooking Instructions
1. Pour the cooking oil into a wok and heat to 190°C (375°F). Add the marinated pork strips and fry them until they turn brown. Remove the cooked pork from the wok and place on a plate.

2. Leave some oil in the wok. Put the tomato sauce and white sugar into the wok, and heat until the oil and sauce are fully combined.

3. Add some water to the wok and thoroughly heat the sweet and sour sauce before adding the pork strips to it.

4. Pour in the starchy sauce. Stir-fry all the ingredients until the pork and sauce are thoroughly mixed together.

5. Serve on a plate and add some coriander for decoration.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529442316.jpg',
    'tags' => '[15]',
    'youtube_url' => 'https://www.youtube.com/watch?v=mdaBIhgEAMo',
    'ingredients' => '[152,137,36,21,23,133,138,123,373,32]',
    'measurements' => '[102,32,44,17,5,411,411,10,411,44]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
251 => 
array (
    'id' => 252,
    'tmdb_id' => 52950,
    'name' => 'Szechuan Beef',
    'category_id' => 3,
    'area_id' => 10,
    'instructions' => 'STEP 1 - MARINATING THE BEEF
In a bowl, add the beef, salt, sesame seed oil, white pepper, egg white, 2 Tablespoon of corn starch and 1 Tablespoon of oil.
STEP 2 - STIR FRY
First Cook the beef by adding 2 Tablespoon of oil until the beef is golden brown.
Set the beef aside
In a wok add 1 Tablespoon of oil, minced ginger, minced garlic and stir-fry for few seconds.
Next add all of the vegetables and then add sherry cooking wine and 1 cup of water.
To make the sauce add oyster sauce, hot pepper sauce, and sugar.
add the cooked beef and 1 spoon of soy sauce
To thicken the sauce, whisk together 1 Tablespoon of cornstarch and 2 Tablespoon of water in a bowl and slowly add to your stir-fry until it\'s the right thickness.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529443236.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=SQGZqZYz7Ms',
    'ingredients' => '[67,21,136,102,177,138,17,27,55,53,64,183,85,45,511,36,142,154,23,133]',
    'measurements' => '[141,17,5,183,32,20,182,5,5,296,132,296,27,27,117,27,117,17,5,117]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
252 => 
array (
    'id' => 253,
    'tmdb_id' => 52953,
    'name' => 'Shrimp Chow Fun',
    'category_id' => 8,
    'area_id' => 10,
    'instructions' => 'STEP 1 - SOAK THE RICE NOODLES
Soak the rice noodles overnight untill they are soft
STEP 2 - BOIL THE RICE NOODLES
Boil the noodles for 10-15 minutes and then rinse with cold water to stop the cooking process of the noodles.
STEP 3 -MARINATING THE SHRIMP
In a bowl add the shrimp, egg, 1 pinch of white pepper, 1 Teaspoon of sesame seed oil, 1 Tablespoon corn starch and 1 tablespoon of oil
Mix together well
STEP 4 - STIR FRY
In a wok add 2 Tablespoons of oil, shrimp and stir fry them until it is golden brown
Set the shrimp aside
Add 1 Tablespoon of oil to the work and then add minced garlic, ginger and all of the vegetables.
Add the noodles to the wok
Next add sherry cooking wine, oyster sauce, sugar, vinegar, sesame seed oil, 1 pinch white pepper, and soy sauce
Add back in the shrimp
To thicken the sauce, whisk together 1 Tablespoon of corn starch and 2 Tablespoon of water in a bowl and slowly add to your stir-fry until it\'s the right thickness.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1529445434.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=wzaTcpoFEaY',
    'ingredients' => '[451,340,137,102,136,134,17,140,27,53,141,176,511,142,23,373,133]',
    'measurements' => '[513,268,142,95,37,25,182,5,5,132,27,132,117,117,326,326,117]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
253 => 
array (
    'id' => 254,
    'tmdb_id' => 52960,
    'name' => 'Salmon Avocado Salad',
    'category_id' => 8,
    'area_id' => 1,
    'instructions' => 'Season the salmon, then rub with oil. Mix the dressing ingredients together. Halve, stone, peel and slice the avocados. Halve and quarter the cucumber lengthways, then cut into slices. Divide salad, avocado and cucumber between four plates, then drizzle with half the dressing.

Heat a non-stick pan. Add the salmon and fry for 3-4 mins on each side until crisp but still moist inside. Put a salmon fillet on top of each salad and drizzle over the remaining dressing. Serve warm.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1549542994.jpg',
    'tags' => '[23,24,26,68,5,65,73]',
    'youtube_url' => 'https://www.youtube.com/watch?v=FJiu2S0Xap0',
    'ingredients' => '[144,225,156,454,112,132,199,47]',
    'measurements' => '[42,57,32,42,182,390,37,20]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
254 => 
array (
    'id' => 255,
    'tmdb_id' => 52962,
    'name' => 'Salmon Eggs Eggs Benedict',
    'category_id' => 9,
    'area_id' => 4,
    'instructions' => 'First make the Hollandaise sauce. Put the lemon juice and vinegar in a small bowl, add the egg yolks and whisk with a balloon whisk until light and frothy. Place the bowl over a pan of simmering water and whisk until mixture thickens. Gradually add the butter, whisking constantly until thick – if it looks like it might be splitting, then whisk off the heat for a few mins. Season and keep warm.

To poach the eggs, bring a large pan of water to the boil and add the vinegar. Lower the heat so that the water is simmering gently. Stir the water so you have a slight whirlpool, then slide in the eggs one by one. Cook each for about 4 mins, then remove with a slotted spoon.

Lightly toast and butter the muffins, then put a couple of slices of salmon on each half. Top each with an egg, spoon over some Hollandaise and garnish with chopped chives.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1550440197.jpg',
    'tags' => '[10,6]',
    'youtube_url' => 'https://www.youtube.com/watch?v=Woiiet4vQ58',
    'ingredients' => '[18,164,512,2,513,110,164,137,22]',
    'measurements' => '[60,25,4,12,64,37,37,514,97]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
255 => 
array (
    'id' => 256,
    'tmdb_id' => 52963,
    'name' => 'Shakshuka',
    'category_id' => 4,
    'area_id' => 25,
    'instructions' => 'Heat the oil in a frying pan that has a lid, then soften the onions, chilli, garlic and coriander stalks for 5 mins until soft. Stir in the tomatoes and sugar, then bubble for 8-10 mins until thick. Can be frozen for 1 month.

Using the back of a large spoon, make 4 dips in the sauce, then crack an egg into each one. Put a lid on the pan, then cook over a low heat for 6-8 mins, until the eggs are done to your liking. Scatter with the coriander leaves and serve with crusty bread.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/g373701551450225.jpg',
    'tags' => '[55,6,13]',
    'youtube_url' => 'https://www.youtube.com/watch?v=C-3_jYrfdBU',
    'ingredients' => '[47,151,243,55,32,143,5,18,306]',
    'measurements' => '[117,101,85,78,159,286,117,60,96]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
256 => 
array (
    'id' => 257,
    'tmdb_id' => 52964,
    'name' => 'Smoked Haddock Kedgeree',
    'category_id' => 9,
    'area_id' => 3,
'instructions' => 'Melt 50g butter in a large saucepan (about 20cm across), add 1 finely chopped medium onion and cook gently over a medium heat for 5 minutes, until softened but not browned.

Stir in 3 split cardamom pods, ¼ tsp turmeric, 1 small cinnamon stick and 2 bay leaves, then cook for 1 minute.

Tip in 450g basmati rice and stir until it is all well coated in the spicy butter.

Pour in 1 litre chicken or fish stock, add ½ teaspoon salt and bring to the boil, stir once to release any rice from the bottom of the pan. Cover with a close-fitting lid, reduce the heat to low and leave to cook very gently for 12 minutes.

Meanwhile, bring some water to the boil in a large shallow pan. Add 750g un-dyed smoked haddock fillet and simmer for 4 minutes, until the fish is just cooked. Lift it out onto a plate and leave until cool enough to handle.

Hard-boil 3 eggs for 8 minutes.

Flake the fish, discarding any skin and bones. Drain the eggs, cool slightly, then peel and chop. 

Uncover the rice and remove the bay leaves, cinnamon stick and cardamom pods if you wish to. Gently fork in the fish and the chopped eggs, cover again and return to the heat for 2-3 minutes, or until the fish has heated through.

Gently stir in almost all the 3 tbsp chopped fresh parsley, and season with a little salt and black pepper to taste. Serve scattered with the remaining parsley and garnished with 1 lemon, cut into wedges.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1550441275.jpg',
    'tags' => '[6,40,74]',
    'youtube_url' => 'https://www.youtube.com/watch?v=QqdzDCWS4gQ',
    'ingredients' => '[2,53,125,30,74,99,283,218,390,18,83,109]',
    'measurements' => '[113,140,435,273,284,125,353,408,98,57,104,140]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
257 => 
array (
    'id' => 258,
    'tmdb_id' => 52980,
    'name' => 'Stamppot',
    'category_id' => 10,
    'area_id' => 12,
    'instructions' => '
Wash and peel the potatoes and cut into similarly sized pieces for even cooking.

In a large soup pot, boil the potatoes and the bay leaves in salted water for 20 minutes. Discard the bay leaves.

If you\'re not using a bag of ready-cut curly kale, wash the bunches thoroughly under cool running water to get rid of all soil—you wouldn\'t want that gritty texture in your finished dish. Trim any coarse stems and discard any brown leaves. With a sharp knife, cut the curly kale into thin strips.

Peel and chop the shallots.

In a frying pan or skillet, melt 1 tbsp. of butter and saute the shallots for a few minutes before adding the curly kale and 2 tbsp. of water. Season and cook for about 10 minutes, or until tender.

Warm the milk on the stove or in the microwave.

Drain, shake and dry the potatoes with kitchen towels before mashing with a potato masher or ricer. Working quickly, add the warm milk and the remaining butter. Season to taste with nutmeg, salt, and pepper. 

Mix the cooked curly kale through the cooked mashed potato mixture.

Top with slices of the smoked sausage and serve hot with your favorite mustard or gravy.

Serve and enjoy!',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/hyarod1565090529.jpg',
    'tags' => '[37,13]',
    'youtube_url' => 'https://www.youtube.com/watch?v=hTrSXryX31A',
    'ingredients' => '[66,99,103,2,285,89,16,44,21,102]',
    'measurements' => '[130,515,4,20,98,4,385,114,95,95]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
258 => 
array (
    'id' => 259,
    'tmdb_id' => 52981,
'name' => 'Snert (Dutch Split Pea Soup)',
    'category_id' => 7,
    'area_id' => 12,
    'instructions' => 'Gather the ingredients.

In a large soup pot, bring water, split peas, pork belly or bacon, pork chop, and bouillon cube to a boil. Reduce the heat to a simmer, cover and let cook for 45 minutes, stirring occasionally and skimming off any foam that rises to the top. 

Remove the pork chop, debone, and thinly slice the meat. Set aside.

Add the celery, carrots, potato, onion, leek, and celeriac to the soup. Return to the boil, reduce the heat to a simmer and let cook, uncovered, for another 30 minutes, adding a little extra water if the ingredients start to stick to the bottom of the pot.

Add the smoked sausage for the last 15 minutes of cooking time. When the vegetables are tender, remove the bacon and smoked sausage, slice thinly and set aside.

If you prefer a smooth consistency, purée the soup with a stick blender. Season to taste with salt and pepper. Add the meat back to the soup, setting some slices of rookworst aside.

Serve in heated bowls or soup plates, garnished with slices of rookworst and chopped celery leaf.

Enjoy!',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/9ptx0a1565090843.jpg',
    'tags' => '[32,19]',
    'youtube_url' => 'https://www.youtube.com/watch?v=5YV0sJLtLt8',
    'ingredients' => '[36,332,152,251,85,64,66,53,86,124,89]',
    'measurements' => '[475,9,121,32,4,4,50,284,284,27,482]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
259 => 
array (
    'id' => 260,
    'tmdb_id' => 52982,
    'name' => 'Spaghetti alla Carbonara',
    'category_id' => 11,
    'area_id' => 11,
    'instructions' => 'STEP 1
Put a large saucepan of water on to boil.

STEP 2
Finely chop the 100g pancetta, having first removed any rind. Finely grate 50g pecorino cheese and 50g parmesan and mix them together.

STEP 3
Beat the 3 large eggs in a medium bowl and season with a little freshly grated black pepper. Set everything aside.

STEP 4
Add 1 tsp salt to the boiling water, add 350g spaghetti and when the water comes back to the boil, cook at a constant simmer, covered, for 10 minutes or until al dente (just cooked).

STEP 5
Squash 2 peeled plump garlic cloves with the blade of a knife, just to bruise it.

STEP 6
While the spaghetti is cooking, fry the pancetta with the garlic. Drop 50g unsalted butter into a large frying pan or wok and, as soon as the butter has melted, tip in the pancetta and garlic.

STEP 7
Leave to cook on a medium heat for about 5 minutes, stirring often, until the pancetta is golden and crisp. The garlic has now imparted its flavour, so take it out with a slotted spoon and discard.

STEP 8
Keep the heat under the pancetta on low. When the pasta is ready, lift it from the water with a pasta fork or tongs and put it in the frying pan with the pancetta. Don’t worry if a little water drops in the pan as well (you want this to happen) and don’t throw the pasta water away yet.

STEP 9
Mix most of the cheese in with the eggs, keeping a small handful back for sprinkling over later.

STEP 10
Take the pan of spaghetti and pancetta off the heat. Now quickly pour in the eggs and cheese. Using the tongs or a long fork, lift up the spaghetti so it mixes easily with the egg mixture, which thickens but doesn’t scramble, and everything is coated.

STEP 11
Add extra pasta cooking water to keep it saucy (several tablespoons should do it). You don’t want it wet, just moist. Season with a little salt, if needed.

STEP 12
Use a long-pronged fork to twist the pasta on to the serving plate or bowl. Serve immediately with a little sprinkling of the remaining cheese and a grating of black pepper. If the dish does get a little dry before serving, splash in some more hot pasta water and the glossy sauciness will be revived.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/llcbn01574260722.jpg',
    'tags' => '[39,43,13]',
    'youtube_url' => 'https://www.youtube.com/watch?v=_T6jkRvhlkk',
    'ingredients' => '[457,51,21,104,478,182]',
    'measurements' => '[263,21,55,81,113,55]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
260 => 
array (
    'id' => 261,
    'tmdb_id' => 52992,
    'name' => 'Soy-Glazed Meatloaves with Wasabi Mashed Potatoes & Roasted Carrots',
    'category_id' => 3,
    'area_id' => 4,
    'instructions' => '1. Preheat oven to 425 degrees. Wash and dry all produce. Dice potatoes into 1/2-inch pieces. Trim, peel, and cut carrots on a diagonal into 1/2-inch-thick pieces. Trim and thinly slice scallions, separating whites from greens; finely chop whites. Peel and finely chop garlic.

2. In a medium bowl, soak bread with 2 TBSP water (4 TBSP for 4 servings); break up with your hands until pasty. Stir in beef, sriracha, scallion whites, half the garlic, salt (we used 3/4 tsp kosher salt; 11/2 tsp for 4), and pepper. Form into two 1-inch-tall loaves (four loaves for 4). Place on one side of a baking sheet. Toss carrots on empty side of same sheet with a drizzle of oil, salt, and pepper. (For 4, spread meatloaves out across whole sheet and add carrots to a second sheet.) Bake for 20 minutes (we\'ll glaze the meatloaves then).

3. Meanwhile, place potatoes in a medium pot with enough salted water to cover by 2 inches. Bring to a boil and cook until very
tender, 12-15 minutes. Reserve 1/2 cup potato cooking liquid, then drain. While potatoes cook, in a small bowl, combine soy sauce, garlic powder, 1/4 cup ketchup (1/2 cup for 4 servings), and 2 tsp sugar (4 tsp for 4).

4. Once meatloaves and carrots have baked 20 minutes, remove from oven. Spoon half the ketchup glaze over meatloaves (save
the rest for serving); return to oven until carrots are browned and tender, meatloaves are cooked through, and glaze is tacky, 4-5 minutes more.

5. Meanwhile, melt 2 TBSP butter (4 TBSP for 4 servings) in pot used for potatoes over medium heat. Add remaining garlic and cook
until fragrant, 30 seconds. Add potatoes and 1/4 tsp wasabi. Mash, adding splashes of reserved potato cooking liquid as necessary until smooth. Season with salt and pepper. (If you like things spicy, stir in more wasabi!)

6. Divide meatloaves, mashed potatoes, and roasted carrots between plates. Sprinkle with scallion greens and serve with remaining ketchup glaze on the side for dipping.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/o2wb6p1581005243.jpg',
    'tags' => '[]',
    'youtube_url' => '',
    'ingredients' => '[66,64,439,55,41,166,133,157,135,23,2]',
    'measurements' => '[174,313,32,154,179,32,4,32,5,37,75]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
261 => 
array (
    'id' => 262,
    'tmdb_id' => 52994,
    'name' => 'Skillet Apple Pork Chops with Roasted Sweet Potatoes & Zucchini',
    'category_id' => 10,
    'area_id' => 4,
    'instructions' => '
Serves 2


1. 

Adjust racks to top and middle positions and preheat oven to 450 degrees. Wash and dry all produce. Dice sweet potatoes into 1/2-inch pieces. Toss on a baking sheet with a drizzle of oil, salt, and pepper. Roast on top rack for 12 minutes (we\'ll roast the zucchini then). 


2. 

Meanwhile, halve and core apple; thinly slice into half-moons. Peel and finely chop garlic. Quarter lemon. Trim and halve zucchini lengthwise; cut crosswise into 1/2-inch-thick half-moons. Toss on a second baking sheet with a drizzle of oil and a pinch of salt and pepper. Set aside. 


3. 

Pat pork dry with paper towels and season all over with salt and pepper. Heat a drizzle of oil in a large pan over medium-high heat. Add pork and cook until browned and cooked through, 4-5 minutes per side. Turn off heat; transfer to a plate. 


4. 

Once sweet potatoes have roasted 12 minutes, transfer baking sheet with zucchini to middle rack and continue roasting until both veggies are browned and softened, 12-15 minutes more. 


5. 

Meanwhile, melt 1 TBSP butter (2 TBSP for 4 servings) in pan used for pork over medium-high heat. Add apple and season with salt and pepper. Cook, scraping up any browned bits from bottom of pan, until apple is slightly softened, 2-3 minutes. Add garlic; cook until fragrant, 30 seconds. Add 1/z cup water (3/4 cup for 4), stock concentrate, and 11/2 tsp sugar (3 tsp for 4). Cook, stirring, until sauce has thickened and apple is very tender, 3-5 minutes. Season with salt and pepper. 


6. 

Remove pan with apple from heat; stir in 1 TBSP butter (2 TBSP for 4 servings) and a squeeze of lemon juice. Divide pork, zucchini, and sweet potatoes between plates. Top pork with glazed apple sauce. Top zucchini with a squeeze of lemon juice. ',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/h3ijwo1581013377.jpg',
    'tags' => '[]',
    'youtube_url' => '',
    'ingredients' => '[66,514,55,109,152,515,218,135,23,2]',
    'measurements' => '[4,32,154,32,4,32,32,30,162,75]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
262 => 
array (
    'id' => 263,
    'tmdb_id' => 53005,
    'name' => 'Strawberry Rhubarb Pie',
    'category_id' => 1,
    'area_id' => 1,
    'instructions' => 'Pie Crust:  In a food processor, place the flour, salt, and sugar and process until combined. Add the butter and process until the mixture resembles coarse

meal (about 15 seconds). Pour 1/4 cup (60 ml) water in a slow, steady stream, through the feed tube until the dough just holds together when pinched. If necessary, add more water. Do not process more than 30 seconds.
Turn the dough onto your work surface and gather into a ball. Divide the dough in half, flattening each half into a disk, cover with plastic wrap, and refrigerate for about one hour before using. This will chill the butter and relax the gluten in the flour. 

After the dough has chilled sufficiently, remove one portion of the dough from the fridge and place it on a lightly floured surface.  Roll the pastry into a 12 inch (30 cm) circle. (To prevent the pastry from sticking to the counter and to ensure uniform thickness, keep lifting up and turning the pastry a quarter turn as you roll (always roll from the center of the pastry outwards).)  Fold the dough in half and gently transfer to a 9 inch (23 cm) pie pan. Brush off any excess flour and trim any overhanging pastry to an edge of 1/2 inch (1.5 cm). Refrigerate the pastry, covered with plastic wrap, while you make the filling. 

Remove the second round of pastry and roll it into a 13 inch (30 cm) circle. Using a pastry wheel or pizza cutter, cut the pastry into about 3/4 inch (2 cm) strips. Place the strips of pastry on a parchment paper-lined baking sheet, cover with plastic wrap, and place in the refrigerator for about 10 minutes. 

Make the Strawberry Rhubarb Filling: Place the cut strawberries and rhubarb in a large bowl. In a small bowl mix together the cornstarch, sugar, and ground cinnamon. 

Remove the chilled pie crust from the fridge. Sprinkle about 2 tablespoons of the sugar mixture over the bottom of the pastry crust. Add the remaining sugar mixture to the strawberries and rhubarb and gently toss to combine. Pour the fruit mixture into the prepared pie shell. Sprinkle the fruit with about 1 teaspoon of lemon juice and dot with 2 tablespoons of butter.

Remove the lattice pastry from the refrigerator and, starting at the center with the longest strips and working outwards, place half the strips, spacing about 1 inch (2.5 cm) apart, on top of the filling. (Use the shortest pastry strips at the outer edges.) Then, gently fold back, about halfway, every other strip of pastry. Take another strip of pastry and place it perpendicular on top of the first strips of pastry. Unfold the bottom strips of pastry and then fold back the strips that weren\'t folded back the first time. Lay another strip of pastry perpendicular on top of the filling and then continue with the remaining strips. Trim the edges of the pastry strips, leaving a 1 inch (2.5 cm) overhang. Seal the edges of the pastry strips by folding them under the bottom pastry crust and flute the edges of the pastry. Brush the lattice pastry with milk and sprinkle with a little sugar. Cover and place in the refrigerator while you preheat the oven to 400 degrees F (205 degrees C) and place the oven rack in the lower third of the oven. Put a baking sheet, lined with aluminum foil, on the oven rack (to catch any spills.)

Place the pie plate on the hot baking sheet and bake the pie for about 35 minutes and then, if the edges of the pie are browning too much, cover with a foil ring. Continue to bake the pie for about another 10 minutes or until the crust is a golden brown color and the fruit juices begin to bubble.

Remove the pie from the oven and place on a wire rack to cool for several hours. Serve at room temperature with softly whipped cream or vanilla ice cream. Leftovers can be stored in the refrigerator for about 3 days. Reheat before serving. This pie can be frozen.

Makes one 9 inch (23 cm) pie.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/178z5o1585514569.jpg',
    'tags' => '[4,16,2,3,67]',
    'youtube_url' => 'https://www.youtube.com/watch?v=tGw5Pwm4YA0',
    'ingredients' => '[19,21,23,2,36,516,324,134,23,14,110,22,16,23]',
    'measurements' => '[122,5,25,27,132,353,353,20,81,273,5,25,25,96]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
263 => 
array (
    'id' => 264,
    'tmdb_id' => 53008,
    'name' => 'Stuffed Lamb Tomatoes',
    'category_id' => 12,
    'area_id' => 23,
    'instructions' => 'Heat oven to 180C/160C fan/gas 4. Slice the tops off the tomatoes and reserve. Scoop out most of the pulp with a teaspoon, being careful not to break the skin. Finely chop the pulp, and keep any juices. Sprinkle the insides of the tomatoes with a little sugar to take away the acidity, then place them on a baking tray.

Heat 2 tbsp olive oil in a large frying pan, add the onion and garlic, then gently cook for about 10 mins until soft but not coloured. Add the lamb, cinnamon and tomato purée, turn up the heat, then fry until the meat is browned. Add the tomato pulp and juice, the rice and the stock. Season generously. Bring to the boil, then simmer for 15 mins or until the rice is tender and the liquid has been absorbed. Set aside to cool a little, then stir in the herbs.

Stuff the tomatoes up to the brim, top tomatoes with their lids, drizzle with 2 tbsp more olive oil, sprinkle 3 tbsp water into the tray, then bake for 35 mins. Serve with salad and crusty bread, hot or cold.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/u55lbp1585564013.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=KfJp-QfrCz4',
    'ingredients' => '[54,23,47,53,28,396,14,123,155,218,189,366,112]',
    'measurements' => '[147,95,182,140,129,102,117,145,113,82,182,25,117]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
264 => 
array (
    'id' => 265,
    'tmdb_id' => 53023,
'name' => 'Sledz w Oleju (Polish Herrings)',
    'category_id' => 8,
    'area_id' => 14,
    'instructions' => 'Soak herring in cold water for at least 1 hour. If very salty, repeat, changing the water each time.

Drain thoroughly and slice herring into bite-size pieces.

Place in a jar large enough to accommodate the pieces and cover with oil, allspice, peppercorns, and bay leaf. Close the jar.

Refrigerate for 2 to 3 days before eating. This will keep refrigerated up to 2 weeks.

Serve with finely chopped onion or onion slices, lemon, and parsley or dill.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/7ttta31593350374.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=v6I3GZlBkOM',
    'ingredients' => '[517,53,47,72,102,99]',
    'measurements' => '[24,86,132,5,5,32]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
265 => 
array (
    'id' => 266,
    'tmdb_id' => 53028,
    'name' => 'Shawarma',
    'category_id' => 2,
    'area_id' => 25,
'instructions' => 'Combine the marinade ingredients in a large ziplock bag (or bowl).
Add the chicken and use your hands to make sure each piece is coated. If using a ziplock bag, I find it convenient to close the bag then massage the bag to disperse the rub all over each chicken piece.
Marinate overnight or up to 24 hours.
Combine the Yoghurt Sauce ingredients in a bowl and mix. Cover and put in the fridge until required (it will last for 3 days in the fridge).
Heat grill/BBQ (or large heavy based pan on stove) on medium high. You should not need to oil it because the marinade has oil in it and also thigh fillets have fat. But if you are worried then oil your hotplate/grill. (See notes for baking)
Place chicken on the grill and cook the first side for 4 to 5 minutes until nicely charred, then turn and cook the other side for 3 to 4 minutes (the 2nd side takes less time).
Remove chicken from the grill and cover loosely with foil. Set aside to rest for 5 minutes.
TO SERVE
Slice chicken and pile onto platter alongside flatbreads, Salad and the Yoghurt Sauce.
To make a wrap, get a piece of flatbread and smear with Yoghurt Sauce. Top with a bit of lettuce and tomato and Chicken Shawarma. Roll up and enjoy!',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/kcv6hj1598733479.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=3lxUIeKDgic',
    'ingredients' => '[25,32,31,125,29,167,110,47,374,28,31,110,246,130,333]',
    'measurements' => '[304,117,117,117,5,37,25,20,27,32,5,105,281,281,21]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
266 => 
array (
    'id' => 267,
    'tmdb_id' => 53040,
    'name' => 'Spring onion and prawn empanadas',
    'category_id' => 8,
    'area_id' => 26,
    'instructions' => 'STEP 1

To make the dough, rub the butter into the flour and then add the egg white and half the yolk (keep the rest), vinegar, a pinch of salt and enough cold water to make a soft dough. Knead on a floured surface until smooth and then wrap and rest for 30 minutes.

STEP 2

Heat the oven to 180c/fan 160c/gas 4. Trim the green ends of the spring onions and then finely slice the rest. Heat a little oil in a pan and fry them gently until soft but not browned. Add the chilli and garlic, stir and then add the prawns and cook until they are opaque. Season well. Scoop out the prawns and bubble the juices until they thicken, then add back the prawns.

STEP 3

Divide the empanada dough into eight balls and roll out to thin circles on a floured surface. Put some filling on one half of the dough, sprinkle the feta on top and fold the other half over. Trim the edge and then fold and crimp the dough together so the empanada is tightly sealed, put it on an oiled baking sheet either on its side or sitting on its un-crimped edge like a cornish pasty. Repeat with the remaining dough and mixture. Mix the leftover egg yolk with a splash of water and brush the top of the empanadas.

STEP 4

Bake for 30 minutes or until golden and slightly crisp around the edges.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1c5oso1614347493.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=Q24haJU-1dI',
    'ingredients' => '[176,47,243,55,340,306,2,10,137,164]',
    'measurements' => '[171,44,107,78,122,116,410,79,191,17]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
267 => 
array (
    'id' => 268,
    'tmdb_id' => 53054,
    'name' => 'Seri muka kuih',
    'category_id' => 1,
    'area_id' => 2,
    'instructions' => 'Soak glutinous rice with water for at least 1 ½ hours prior to using. Drain.
Prepare a 9-inch round or square cake pan and spray with cooking spray or line with plastic wrap.
Mix coconut milk, water, salt and the rice. Pour it into cake pan, topped with the pandan knots.
Steam for 30 minutes.
After 30 minutes, fluff up the rice and remove pandan knots. Then, using a greased spatula, flatten the steamed rice. Make sure there are no holes/air bubbles and gaps in the rice, especially the sides.
Steam for another 10 minutes.

Combine pandan juice, coconut milk, all purpose flour, cornflour, and sugar. Mix well.
Add eggs and whisk well then strain into a medium sized metal bowl or pot.
Place pandan mixture over simmering water (double boiler or bain-marie)
Stir continuously and cook till custard starts to thicken. (15 minutes)
Pour pandan custard into glutinous rice layer, give it a little tap (for air bubbles) and continue to steam for 30 minutes.
Remove kuih seri muka from the steamer and allow to cool completely before cutting into rectangles or diamond shapes.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/6ut2og1619790195.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=_NJtCfqgaBo',
    'ingredients' => '[155,35,36,21,106,19,18,180,23]',
    'measurements' => '[42,103,82,5,143,20,57,13,67]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
268 => 
array (
    'id' => 269,
    'tmdb_id' => 53065,
    'name' => 'Sushi',
    'category_id' => 8,
    'area_id' => 19,
    'instructions' => 'STEP 1
TO MAKE SUSHI ROLLS: Pat out some rice. Lay a nori sheet on the mat, shiny-side down. Dip your hands in the vinegared water, then pat handfuls of rice on top in a 1cm thick layer, leaving the furthest edge from you clear.

STEP 2
Spread over some Japanese mayonnaise. Use a spoon to spread out a thin layer of mayonnaise down the middle of the rice.

STEP 3
Add the filling. Get your child to top the mayonnaise with a line of their favourite fillings – here we’ve used tuna and cucumber.

STEP 4
Roll it up. Lift the edge of the mat over the rice, applying a little pressure to keep everything in a tight roll.

STEP 5
Stick down the sides like a stamp. When you get to the edge without any rice, brush with a little water and continue to roll into a tight roll.

STEP 6
Wrap in cling film. Remove the mat and roll tightly in cling film before a grown-up cuts the sushi into thick slices, then unravel the cling film.

STEP 7
TO MAKE PRESSED SUSHI: Layer over some smoked salmon. Line a loaf tin with cling film, then place a thin layer of smoked salmon inside on top of the cling film.

STEP 8
Cover with rice and press down. Press about 3cm of rice over the fish, fold the cling film over and press down as much as you can, using another tin if you have one.

STEP 9
Tip it out like a sandcastle. Turn block of sushi onto a chopping board. Get a grown-up to cut into fingers, then remove the cling film.

STEP 10
TO MAKE SUSHI BALLS: Choose your topping. Get a small square of cling film and place a topping, like half a prawn or a small piece of smoked salmon, on it. Use damp hands to roll walnut-sized balls of rice and place on the topping.

STEP 11
Make into tight balls. Bring the corners of the cling film together and tighten into balls by twisting it up, then unwrap and serve.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/g046bb1663960946.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=ub68OxEypaY',
    'ingredients' => '[383,518,5,163,518,133,156]',
    'measurements' => '[118,82,25,20,117,117,32]',
    'created_at' => '2025-04-15 09:39:31',
    'updated_at' => '2025-04-15 09:39:31',
),
269 => 
array (
    'id' => 270,
    'tmdb_id' => 53067,
    'name' => 'Stuffed Bell Peppers with Quinoa and Black Beans',
    'category_id' => 4,
    'area_id' => 5,
'instructions' => '1. Preheat your oven to 375°F (190°C). Lightly grease a 9x13-inch baking dish or a similar-sized casserole dish.
2. Place the bell pepper halves in the prepared baking dish, cut side up. Bake for 15-20 minutes, or until slightly softened.
3. While the bell peppers are baking, prepare the filling. In a large skillet, heat the olive oil over medium heat. Add the chopped onion, and cook for 3-4 minutes, until softened. Add the garlic, and cook for another 1 minute, until fragrant.
4. Stir in the cooked quinoa, black beans, corn, diced tomatoes, ground cumin, chili powder, smoked paprika, salt, and pepper. Cook for 5-7 minutes, until heated through. Remove the skillet from heat, and stir in 1 cup of the shredded cheese, if using.
5. Remove the bell peppers from the oven, and carefully stuff each pepper half with the quinoa and black bean mixture. Top the stuffed peppers with the remaining 1/2 cup of shredded cheese, if using.
6. Return the stuffed peppers to the oven, and bake for another 15-20 minutes, until the cheese is melted and the peppers are tender.
7. Remove from the oven, and allow the stuffed peppers to cool for 5 minutes before serving. Garnish with fresh chopped cilantro.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/b66myb1683207208.jpg',
    'tags' => '[]',
    'youtube_url' => '',
    'ingredients' => '[183,47,53,55,305,519,254,174,31,289,230,21,102,233,321]',
    'measurements' => '[369,226,214,99,516,26,27,26,206,33,33,152,152,166,159]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
270 => 
array (
    'id' => 271,
    'tmdb_id' => 53082,
    'name' => 'Strawberries Romanoff',
    'category_id' => 1,
    'area_id' => 6,
    'instructions' => 'In a medium bowl, combine hulled and quartered strawberries, 4 Tbsp sugar and 4 Tbsp liqueur, stir to combine then cover and refrigerate at least 1 hour and up to 2 hours, stirring once or twice.

Two photos of cut strawberries in a bowl with one having sugar being added to the bowl Two photos of cut up strawberries for Strawberry Romanoff 

Just before serving, in a large mixing bowl, combine 1 cup cold heavy cream and 1/4 cup powdered sugar, and beat with an electric mixer until stiff peaks form. Using a spatula, fold in 1/4 cup sour cream just until well blended.

To serve, stir strawberries then divide between 6 serving glasses or bowls. You can spoon a little syrup over the berries if you like. You can also use this syrup to soak a cake. Spoon cream over strawberries, dividing evenly. You can also use an ice cream scoop with trigger release for a nice rounded puff of cream. Serve right away or chill and enjoy within 2 hours of assembly.

',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/oe8rg51699014028.jpg',
    'tags' => '[3]',
    'youtube_url' => 'https://www.youtube.com/watch?v=ybWHc4Vi-xU',
    'ingredients' => '[324,23,294,209,228]',
    'measurements' => '[517,182,182,27,163]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
271 => 
array (
    'id' => 272,
    'tmdb_id' => 52772,
    'name' => 'Teriyaki Chicken Casserole',
    'category_id' => 2,
    'area_id' => 19,
    'instructions' => 'Preheat oven to 350° F. Spray a 9x13-inch baking pan with non-stick spray.
Combine soy sauce, ½ cup water, brown sugar, ginger and garlic in a small saucepan and cover. Bring to a boil over medium heat. Remove lid and cook for one minute once boiling.
Meanwhile, stir together the corn starch and 2 tablespoons of water in a separate dish until smooth. Once sauce is boiling, add mixture to the saucepan and stir to combine. Cook until the sauce starts to thicken then remove from heat.
Place the chicken breasts in the prepared pan. Pour one cup of the sauce over top of chicken. Place chicken in oven and bake 35 minutes or until cooked through. Remove from oven and shred chicken in the dish using two forks.
*Meanwhile, steam or cook the vegetables according to package directions.
Add the cooked vegetables and rice to the casserole dish with the chicken. Add most of the remaining sauce, reserving a bit to drizzle over the top when serving. Gently toss everything together in the casserole dish until combined. Return to oven and cook 15 minutes. Remove from oven and let stand 5 minutes before serving. Drizzle each serving with remaining sauce. Enjoy!',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wvpsxx1468256321.jpg',
    'tags' => '[7,34]',
    'youtube_url' => 'https://www.youtube.com/watch?v=4aZr5hZXP_s',
    'ingredients' => '[133,36,275,467,140,134,194,520,521]',
    'measurements' => '[296,132,163,210,210,330,4,518,186]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
272 => 
array (
    'id' => 273,
    'tmdb_id' => 52806,
    'name' => 'Tandoori chicken',
    'category_id' => 2,
    'area_id' => 3,
    'instructions' => 'Mix the lemon juice with the paprika and red onions in a large shallow dish. Slash each chicken thigh three times, then turn them in the juice and set aside for 10 mins.
Mix all of the marinade ingredients together and pour over the chicken. Give everything a good mix, then cover and chill for at least 1 hr. This can be done up to a day in advance.
Heat the grill. Lift the chicken pieces onto a rack over a baking tray. Brush over a little oil and grill for 8 mins on each side or until lightly charred and completely cooked through.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qptpvt1487339892.jpg',
    'tags' => '[9,7]',
    'youtube_url' => 'https://www.youtube.com/watch?v=-CKvt1KNU74',
    'ingredients' => '[147,167,151,25,135,374,27,28,211,496,184,30]',
    'measurements' => '[519,264,129,520,521,118,522,60,523,523,33,381]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
273 => 
array (
    'id' => 274,
    'tmdb_id' => 52814,
    'name' => 'Thai Green Curry',
    'category_id' => 2,
    'area_id' => 28,
    'instructions' => 'Put the potatoes in a pan of boiling water and cook for 5 minutes. Throw in the beans and cook for a further 3 minutes, by which time both should be just tender but not too soft. Drain and put to one side.
In a wok or large frying pan, heat the oil until very hot, then drop in the garlic and cook until golden, this should take only a few seconds. Don’t let it go very dark or it will spoil the taste. Spoon in the curry paste and stir it around for a few seconds to begin to cook the spices and release all the flavours. Next, pour in the coconut milk and let it come to a bubble.
Stir in the fish sauce and sugar, then the pieces of chicken. Turn the heat down to a simmer and cook, covered, for about 8 minutes until the chicken is cooked.
Tip in the potatoes and beans and let them warm through in the hot coconut milk, then add a lovely citrussy flavour by stirring in the shredded lime leaves (or lime zest). The basil leaves go in next, but only leave them briefly on the heat or they will quickly lose their brightness. Scatter with the lime garnish and serve immediately with boiled rice.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sstssx1487349585.jpg',
    'tags' => '[48,75]',
    'youtube_url' => 'https://www.youtube.com/watch?v=LIbKVpBQKJI',
    'ingredients' => '[66,101,69,55,522,35,523,23,129,132,171,155]',
    'measurements' => '[524,121,30,78,264,106,37,5,525,526,527,528]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
274 => 
array (
    'id' => 275,
    'tmdb_id' => 52822,
    'name' => 'Toad In The Hole',
    'category_id' => 10,
    'area_id' => 1,
    'instructions' => 'Preheat the oven to 200°C/fan180°C/gas 6. fry sausages in a non-stick pan until browned.
Drizzle vegetable oil in a 30cm x 25cm x 6cm deep roasting tray and heat in the oven for 5 minutes.
Put the plain flour in a bowl, crack in the medium free-range eggs, then stir in the grated horseradish. Gradually beat in the semi-skimmed milk. Season.
Put the sausages into the hot roasting tray and pour over the batter. Top with cherry tomatoes on the vine and cook for 30 minutes until puffed and golden.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ytuvwr1503070420.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=t1dWkDrC330',
    'ingredients' => '[89,135,10,18,524,16,143]',
    'measurements' => '[24,73,121,94,529,489,102]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
275 => 
array (
    'id' => 276,
    'tmdb_id' => 52845,
    'name' => 'Turkey Meatloaf',
    'category_id' => 6,
    'area_id' => 1,
    'instructions' => 'Heat oven to 180C/160C fan/gas 4. Heat the oil in a large frying pan and cook the onion for 8-10 mins until softened. Add the garlic, Worcestershire sauce and 2 tsp tomato purée, and stir until combined. Set aside to cool.

Put the turkey mince, egg, breadcrumbs and cooled onion mix in a large bowl and season well. Mix everything to combine, then shape into a rectangular loaf and place in a large roasting tin. Spread 2 tbsp barbecue sauce over the meatloaf and bake for 30 mins.

Meanwhile, drain 1 can of beans only, then pour both cans into a large bowl. Add the remaining barbecue sauce and tomato purée. Season and set aside.

When the meatloaf has had its initial cooking time, scatter the beans around the outside and bake for 15 mins more until the meatloaf is cooked through and the beans are piping hot. Scatter over the parsley and serve the meatloaf in slices.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ypuxtw1511297463.jpg',
    'tags' => '[2]',
    'youtube_url' => 'https://www.youtube.com/watch?v=mTvlmY4vCug',
    'ingredients' => '[47,53,55,175,123,525,18,150,153,188,83]',
    'measurements' => '[253,50,295,84,16,47,50,276,84,286,84]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
276 => 
array (
    'id' => 277,
    'tmdb_id' => 52852,
    'name' => 'Tuna Nicoise',
    'category_id' => 8,
    'area_id' => 7,
    'instructions' => 'Heat oven to 200C/fan 180C/gas 6. Toss the potatoes with 2 tsp oil and some seasoning. Tip onto a large baking tray, then roast for 20 mins, stirring halfway, until crisp, golden and cooked through.
Meanwhile, put eggs in a small pan of water, bring to the boil, then simmer for 8-10 mins, depending on how you like them cooked. Plunge into a bowl of cold water to cool for a few mins. Peel away the shells, then cut into halves.
In a large salad bowl, whisk together the remaining oil, red wine vinegar, capers and chopped tomatoes. Season, tip in the onion, spinach, tuna and potatoes, then gently toss together. Top with the eggs, then serve straight away.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/yypwwq1511304979.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=3_UAxkx0u6U',
    'ingredients' => '[66,47,18,269,526,69,151,454,428]',
    'measurements' => '[353,84,60,77,84,113,371,121,42]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
277 => 
array (
    'id' => 278,
    'tmdb_id' => 52869,
    'name' => 'Tahini Lentils',
    'category_id' => 4,
    'area_id' => 20,
    'instructions' => 'In a jug, mix the tahini with the zest and juice of the lemon and 50ml of cold water to make a runny dressing. Season to taste, then set aside.
Heat the oil in a wok or large frying pan over a medium-high heat. Add the red onion, along with a pinch of salt, and fry for 2 mins until starting to soften and colour. Add the garlic, pepper, green beans and courgette and fry for 5 min, stirring frequently.
Tip in the kale, lentils and the tahini dressing. Keep the pan on the heat for a couple of mins, stirring everything together until the kale is wilted and it’s all coated in the creamy dressing.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vpxyqt1511464175.jpg',
    'tags' => '[52]',
    'youtube_url' => 'https://www.youtube.com/watch?v=8kRlmz8pW0I',
    'ingredients' => '[527,109,47,151,55,329,101,312,285,292]',
    'measurements' => '[113,390,84,140,295,431,102,86,530,531]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
278 => 
array (
    'id' => 279,
    'tmdb_id' => 52882,
    'name' => 'Three Fish Pie',
    'category_id' => 8,
    'area_id' => 1,
'instructions' => 'Preheat the oven to 200C/400F/Gas 6 (180C fan).
Put the potatoes into a saucepan of cold salted water. Bring up to the boil and simmer until completely tender. Drain well and then mash with the butter and milk. Add pepper and taste to check the seasoning. Add salt and more pepper if necessary.
For the fish filling, melt the butter in a saucepan, add the leeks and stir over the heat. Cover with a lid and simmer gently for 10 minutes, or until soft. Measure the flour into a small bowl. Add the wine and whisk together until smooth.
Add the milk to the leeks, bring to the boil and then add the wine mixture. Stir briskly until thickened. Season and add the parsley and fish. Stir over the heat for two minutes, then spoon into an ovenproof casserole. Scatter over the eggs. Allow to cool until firm.
Spoon the mashed potatoes over the fish mixture and mark with a fork. Sprinkle with cheese.
Bake for 30-40 minutes, or until lightly golden-brown on top and bubbling around the edges.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/spswqs1511558697.jpg',
    'tags' => '[40,50,18,16]',
    'youtube_url' => 'https://www.youtube.com/watch?v=Ds1Jb8H5Sg8',
    'ingredients' => '[66,2,16,341,2,86,10,214,16,83,144,353,390,18]',
    'measurements' => '[69,283,44,113,116,123,116,103,532,145,79,79,79,21]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
279 => 
array (
    'id' => 280,
    'tmdb_id' => 52892,
    'name' => 'Treacle Tart',
    'category_id' => 1,
    'area_id' => 1,
'instructions' => 'First make the short crust pastry: measure the flour into a large bowl and rub in the butter with your fingertips until the mixture resembles fine breadcrumbs (alternatively, this can be done in a food processor). Add about three tablespoons of cold water and mix to a firm dough, wrap in cling film and chill in the fridge for about 20 minutes.
Preheat the oven to 200C/400F/Gas 6 and put a heavy baking tray in the oven to heat up. Grease a deep 18cm/7in loose-bottomed fluted flan tin with butter.
Remove about 150g/5½oz of pastry from the main ball and set aside for the lattice top.
Roll the rest of the pastry out thinly on a lightly floured work surface and line the prepared flan tin with the pastry.
Prick the base with a fork, to stop the base rising up during baking.
Place the reserved pastry for the lattice top on cling film and roll out thinly. Egg wash the pastry and set aside to chill in the fridge (the cling film makes it easier to move about). Do not cut into strips at this stage. Do not egg wash the strips once they are on the tart as it will drip into the treacle mixture.
To make the filling, heat the syrup gently in a large pan but do not boil.
Once melted, add the breadcrumbs, lemon juice and zest to the syrup. (You can add less lemon if you would prefer less citrus taste.) If the mixture looks runny, add a few more breadcrumbs.
Pour the syrup mixture into the lined tin and level the surface.
Remove the reserved pastry from the fridge and cut into long strips, 1cm/½in wide. Make sure they are all longer than the edges of the tart tin.
Egg wash the edge of the pastry in the tin, and start to make the woven laying lattice pattern over the mixture, leave the strips hanging over the edge of the tin.
Once the lattice is in place, use the tin edge to cut off the strips by pressing down with your hands, creating a neat finish.
Bake on the pre-heated baking tray in the hot oven for about 10 minutes until the pastry has started to colour, and then reduce the oven temperature to 180C/350F/Gas 4. If at this stage the lattice seems to be getting too dark brown, cover the tart with tin foil.
Bake for a further 25-30 minutes until the pastry is golden-brown and the filling set.
Remove the tart from the oven and leave to firm up in the tin. Serve warm or cold.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wprvrw1511641295.jpg',
    'tags' => '[1]',
    'youtube_url' => 'https://www.youtube.com/watch?v=YMmgKCNcqwI',
    'ingredients' => '[10,2,201,150,147,18]',
    'measurements' => '[79,501,42,81,533,293]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
280 => 
array (
    'id' => 281,
    'tmdb_id' => 52909,
    'name' => 'Tarte Tatin',
    'category_id' => 1,
    'area_id' => 7,
    'instructions' => 'Roll the pastry to a 3mm-thick round on a lightly floured surface and cut a 24cm circle, using a plate as a guide. Lightly prick all over with a fork, wrap in cling film on a baking sheet and freeze while preparing the apples.
Heat oven to 180C/160C fan/gas 4. Peel, quarter and core the apples. Put the sugar in a flameproof 20cm ceramic Tatin dish or a 20cm ovenproof heavy-based frying pan and place over a medium-high heat. Cook the sugar for 5-7 mins to a dark amber caramel syrup that’s starting to smoke, then turn off the heat and stir in the 60g diced chilled butter.
To assemble the Tarte Tatin, arrange the apple quarters very tightly in a circle around the edge of the dish first, rounded-side down, then fill in the middle in a similar fashion. Gently press with your hands to ensure there are no gaps. Brush the fruit with the melted butter.
Bake in the oven for 30 mins, then remove and place the disc of frozen puff pastry on top – it will quickly defrost. Tuck the edges down the inside of the dish and, with a knife, prick a few holes in the pastry to allow steam to escape. Bake for a further 40-45 mins until the pastry is golden brown and crisp.
Allow to cool to room temperature for 1 hr before running a knife around the edge of the dish and inverting it onto a large serving plate that is deep enough to contain the juices. Serve with crème fraîche or vanilla ice cream.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ryspuw1511786688.jpg',
    'tags' => '[21,1,14,27]',
    'youtube_url' => 'https://www.youtube.com/watch?v=8xDM8U6h9Pw',
    'ingredients' => '[50,10,11,5,2,82]',
    'measurements' => '[9,48,21,121,276,12]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
281 => 
array (
    'id' => 282,
    'tmdb_id' => 52912,
    'name' => 'Three-cheese souffles',
    'category_id' => 6,
    'area_id' => 7,
'instructions' => 'Heat oven to 200C/180C fan/ gas 6 and butter 4 small (about 200ml) ramekins. Sprinkle the Parmesan into the ramekins, turning until all sides are covered. Place the milk and bay leaves in a large saucepan over a gentle heat and bring to the boil. Turn off the heat and leave to infuse for 15 mins.
Discard the bay leaves, add the butter and flour, and return to a low heat. Very gently simmer, stirring continuously with a balloon whisk, for about 6 mins until you get a smooth, thick white sauce. Make sure that you get right into the corners of the pan to stop the sauce from catching or becoming lumpy.
Once thickened, transfer the sauce to a large bowl and stir in the mustard powder, cayenne pepper, Gruyère and egg yolks until fully combined.
In a spotlessly clean bowl and with a clean whisk, beat the egg whites just until peaks begin to form.
Carefully fold the egg whites into the cheese sauce in three stages making sure you fold, rather than stir, to keep the egg whites light and airy. Fill the prepared ramekins with the soufflé mix.
Top each soufflé with a slice of goat’s cheese, then place on a baking tray. Bake for 20-25 mins or until springy and well risen but cooked through.
Leave to cool, then run a knife around the edge of each dish and remove the soufflés. If preparing in advance, place soufflés upside down (for neat presentation), on a tray. Cover tray in cling film. Chill for a few days or freeze for up to 1 month.
When ready to re-bake, heat oven to 200C/180C fan/gas 6. Place the upside-down soufflés in a shallow baking dish, top with the remaining goat’s cheese slices and pour over the cream (this stops them from drying out when baked for the second time). Cook for 8-10 mins until golden. Serve immediately alongside some simply dressed salad.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/sxwquu1511793428.jpg',
    'tags' => '[2]',
    'youtube_url' => 'https://www.youtube.com/watch?v=mS_gbQpBvZo',
    'ingredients' => '[2,347,16,62,10,46,29,341,18,528,43,454]',
    'measurements' => '[113,18,118,4,143,33,441,67,57,64,103,12]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
282 => 
array (
    'id' => 283,
    'tmdb_id' => 52926,
    'name' => 'Tourtiere',
    'category_id' => 10,
    'area_id' => 8,
    'instructions' => 'Heat oven to 200C/180C fan/gas 6. Boil the potato until tender, drain and mash, then leave to cool. Heat the oil in a non-stick pan, add the mince and onion and quickly fry until browned. Add the garlic, spices, stock, plenty of pepper and a little salt and mix well. Remove from the heat, stir into the potato and leave to cool.
Roll out half the pastry and line the base of a 20-23cm pie plate or flan tin. Fill with the pork mixture and brush the edges of the pastry with water. Roll out the remaining dough and cover the pie. Press the edges of the pastry to seal, trimming off the excess. Prick the top of the pastry case to allow steam to escape and glaze the top with the beaten egg.
Bake for 30 mins until the pastry is crisp and golden. Serve cut into wedges with a crisp green salad. Leftovers are good cold for lunch the next day, served with a selection of pickles.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/ytpstt1511814614.jpg',
    'tags' => '[16,12,43,19]',
    'youtube_url' => 'https://www.youtube.com/watch?v=A96hbwobKKs',
    'ingredients' => '[66,69,311,53,28,14,72,44,87,279,137]',
    'measurements' => '[87,5,47,85,85,381,381,381,82,42,112]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
283 => 
array (
    'id' => 284,
    'tmdb_id' => 52929,
    'name' => 'Timbits',
    'category_id' => 1,
    'area_id' => 8,
    'instructions' => 'Sift together dry ingredients.
Mix together wet ingredients and incorporate into dry. Stir until smooth.
Drop by teaspoonfuls(no bigger) into hot oil (365 degrees, no hotter), turning after a few moments until golden brown on all sides.
Remove and drain.
Roll in cinnamon sugar while still warm and serve.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/txsupu1511815755.jpg',
    'tags' => '[38,21]',
    'youtube_url' => 'https://www.youtube.com/watch?v=fFLn1h80AGQ',
    'ingredients' => '[19,23,20,21,137,16,17,17,118]',
    'measurements' => '[61,232,16,33,293,202,20,137,138]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
284 => 
array (
    'id' => 285,
    'tmdb_id' => 52970,
    'name' => 'Tunisian Orange Cake',
    'category_id' => 1,
    'area_id' => 21,
    'instructions' => 'Preheat oven to 190 C / Gas 5. Grease a 23cm round springform tin.
Cut off the hard bits from the top and bottom of the orange. Slice the orange and remove all seeds. Puree the orange with its peel in a food processor. Add one third of the sugar and the olive oil and continue to mix until well combined.
Sieve together flour and baking powder.
Beat the eggs and the remaining sugar with an electric hand mixer for at least five minutes until very fluffy. Fold in half of the flour mixture, then the orange and the vanilla, then fold in the remaining flour. Mix well but not for too long.
Pour cake mixture into prepared tin and smooth out. Bake in preheated oven for 20 minutes. Reduce the oven temperature to 160 C / Gas 2 and bake again for 30 minutes Bake until the cake is golden brown and a skewer comes out clean. Cool on a wire cake rack.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/y4jpgq1560459207.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=rCUxg866Ea4',
    'ingredients' => '[202,5,47,19,20,18,94]',
    'measurements' => '[50,9,309,242,117,147,37]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
285 => 
array (
    'id' => 286,
    'tmdb_id' => 52972,
    'name' => 'Tunisian Lamb Soup',
    'category_id' => 12,
    'area_id' => 21,
    'instructions' => 'Add the lamb to a casserole and cook over high heat. When browned, remove from the heat and set aside.
Keep a tablespoon of fat in the casserole and discard the rest. Reduce to medium heat then add the garlic, onion and spinach and cook until the onion is translucent and the spinach wilted or about 5 minutes.
Return the lamb to the casserole with the onion-spinach mixture, add the tomato puree, cumin, harissa, chicken, chickpeas, lemon juice, salt and pepper in the pan. Simmer over low heat for about 20 minutes.
Add the pasta and cook for 15 minutes or until pasta is cooked.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/t8mn9g1560460231.jpg',
    'tags' => '[32]',
    'youtube_url' => 'https://www.youtube.com/watch?v=w1qgTQmLRe4',
    'ingredients' => '[405,55,53,454,123,31,218,255,257,110,217,21,102]',
    'measurements' => '[47,99,32,9,20,117,408,16,42,142,81,95,95]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
286 => 
array (
    'id' => 287,
    'tmdb_id' => 52975,
    'name' => 'Tuna and Egg Briks',
    'category_id' => 8,
    'area_id' => 21,
    'instructions' => 'Heat 2 tsp of the oil in a large saucepan and cook the spring onions over a low heat for 3 minutes or until beginning to soften. Add the spinach, cover with a tight-fitting lid and cook for a further 2–3 minutes or until tender and wilted, stirring once or twice. Tip the mixture into a sieve or colander and leave to drain and cool.
Using a saucer as a guide, cut out 24 rounds about 12.5 cm (5 in) in diameter from the filo pastry, cutting 6 rounds from each sheet. Stack the filo rounds in a pile, then cover with cling film to prevent them from drying out.
When the spinach mixture is cool, squeeze out as much excess liquid as possible, then transfer to a bowl. Add the tuna, eggs, hot pepper sauce, and salt and pepper to taste. Mix well.
Preheat the oven to 200°C (400°F, gas mark 6). Take one filo round and very lightly brush with some of the remaining oil. Top with a second round and brush with a little oil, then place a third round on top and brush with oil.
Place a heaped tbsp of the filling in the middle of the round, then fold the pastry over to make a half-moon shape. Fold in the edges, twisting them to seal, and place on a non-stick baking sheet. Repeat with the remaining pastry and filling to make 8 briks in all.
Lightly brush the briks with the remaining oil. Bake for 12–15 minutes or until the pastry is crisp and golden brown.
Meanwhile, combine the tomatoes and cucumber in a bowl and sprinkle with the lemon juice and seasoning to taste. Serve the briks hot with this salad and the chutney.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/2dsltq1560461468.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=C5n1fN8TGHs',
    'ingredients' => '[47,176,454,181,428,18,154,54,156,110,322]',
    'measurements' => '[25,24,102,60,26,4,44,352,160,117,182]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
287 => 
array (
    'id' => 288,
    'tmdb_id' => 53026,
    'name' => 'Tamiya',
    'category_id' => 4,
    'area_id' => 25,
    'instructions' => 'oak the beans in water to cover overnight.Drain. If skinless beans are unavailable, rub to loosen the skins, then discard the skins. Pat the beans dry with a towel.
Grind the beans in a food mill or meat grinder.If neither appliance is available, process them in a food processor but only until the beans form a paste. (If blended too smoothly, the batter tends to fall apart during cooking.) Add the scallions, garlic, cilantro, cumin, baking powder, cayenne, salt, pepper, and coriander, if using.  Refrigerate for at least 30 minutes.
Shape the bean mixture into 1-inch balls.Flatten slightly and coat with flour.
Heat at least 1½-inches of oil over medium heat to 365 degrees.
Fry the patties in batches, turning once, until golden brown on all sides, about 5 minutes.Remove with a wire mesh skimmer or slotted spoon. Serve as part of a meze or in pita bread with tomato-cucumber salad and tahina sauce.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/n3xxd91598732796.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=mulqW-J3Yy4',
    'ingredients' => '[352,176,28,83,31,20,29,19,135]',
    'measurements' => '[186,21,60,163,37,5,17,96,55]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
288 => 
array (
    'id' => 289,
    'tmdb_id' => 53032,
    'name' => 'Tonkatsu pork',
    'category_id' => 10,
    'area_id' => 19,
    'instructions' => 'STEP 1
Remove the large piece of fat on the edge of each pork loin, then bash each of the loins between two pieces of baking parchment until around 1cm in thickness – you can do this using a meat tenderiser or a rolling pin. Once bashed, use your hands to reshape the meat to its original shape and thickness – this step will ensure the meat is as succulent as possible.

STEP 2
Put the flour, eggs and panko breadcrumbs into three separate wide-rimmed bowls. Season the meat, then dip first in the flour, followed by the eggs, then the breadcrumbs.

STEP 3
In a large frying or sauté pan, add enough oil to come 2cm up the side of the pan. Heat the oil to 180C – if you don’t have a thermometer, drop a bit of panko into the oil and if it sinks a little then starts to fry, the oil is ready. Add two pork chops and cook for 1 min 30 secs on each side, then remove and leave to rest on a wire rack for 5 mins. Repeat with the remaining pork chops.

STEP 4
While the pork is resting, make the sauce by whisking the ingredients together, adding a splash of water if it’s particularly thick. Slice the tonkatsu and serve drizzled with the sauce.',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/lwsnkl1604181187.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=aASr5x0d3Ys',
    'ingredients' => '[309,19,18,150,135,79,175,142,5]',
    'measurements' => '[60,121,49,121,534,25,25,117,84]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
289 => 
array (
    'id' => 290,
    'tmdb_id' => 53057,
    'name' => 'Traditional Croatian Goulash',
    'category_id' => 3,
    'area_id' => 16,
    'instructions' => 'Clean the meat from the veins if there are some and cut it into smaller pieces, 3 × 3 cm. Marinate the meat in the mustard and spices and let it sit in the refrigerator for one hour
Heat one tablespoon of pork fat or vegetable oil in a pot and fry the meat on all sides until it gets browned. Once the meat is cooked, transfer it to a plate and add another tablespoon of fat to the pot
Cut the onions very fine, peel the carrots and shred it using a grater. Cook the onions and carrots over low heat for 15 minutes. You can salt the vegetables a little to make them soften faster
Once the vegetables have browned and become slightly mushy, add the meat and bay leaves and garlic. Pour over with wine and simmer for 10-15 minutes to allow the alcohol to evaporate. Now is the right time to add 2/3 the amount of liquid
Cover the pot and cook over low heat for an hour, stirring occasionally. After the first hour, pour over the rest of the water or stock and cook for another 30-45 minutes
Allow the stew to cool slightly and serve it with a sprinkle of chopped parsley and few slices of fresh hot pepper if you like to spice it up a bit
Slice ​​some fresh bread, season the salad and simply enjoying these wonderful flavors',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/n1hcou1628770088.jpg',
    'tags' => '[32]',
    'youtube_url' => 'https://www.youtube.com/watch?v=ipEz5u2T7KM',
    'ingredients' => '[67,70,64,55,99,98,36,65,21,102,167,135]',
    'measurements' => '[47,101,101,154,4,13,535,20,80,17,17,25]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
290 => 
array (
    'id' => 291,
    'tmdb_id' => 53075,
    'name' => 'Tortang Talong',
    'category_id' => 4,
    'area_id' => 17,
    'instructions' => '0.	Grill the eggplant until the color of skin turns almost black
1.	Let the eggplant cool for a while then peel off the skin. Set aside.
2.	Crack the eggs and place in a bowl
3.	Add salt and beat
4.	Place the eggplant on a flat surface and flatten using a fork.
5.	Dip the flattened eggplant in the beaten egg mixture
6.	Heat the pan and pour the cooking oil
7.	Fry the eggplant (that was dipped in the beaten mixture). Make sure that both sides are cooked. Frying time will take you about 3 to 4 minutes per side on medium heat. 
',
    'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/va668f1683209318.jpg',
    'tags' => '[]',
    'youtube_url' => 'https://www.youtube.com/watch?v=eLl8ekOu1MM',
    'ingredients' => '[316,18,21,47]',
    'measurements' => '[60,4,5,264]',
    'created_at' => '2025-04-15 09:39:32',
    'updated_at' => '2025-04-15 09:39:32',
),
291 => 
array (
    'id' => 292,
    'tmdb_id' => 52775,
    'name' => 'Vegan Lasagna',
    'category_id' => 14,
    'area_id' => 11,
'instructions' => '1) Preheat oven to 180 degrees celcius. 
2) Boil vegetables for 5-7 minutes, until soft. Add lentils and bring to a gentle simmer, adding a stock cube if desired. Continue cooking and stirring until the lentils are soft, which should take about 20 minutes. 
3) Blanch spinach leaves for a few minutes in a pan, before removing and setting aside. 
4) Top up the pan with water and cook the lasagne sheets. When cooked, drain and set aside.
5) To make the sauce, melt the butter and add the flour, then gradually add the soya milk along with the mustard and the vinegar. Cook and stir until smooth and then assemble the lasagne as desired in a baking dish. 
6) Bake in the preheated oven for about 25 minutes.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/rvxxuy1468312893.jpg',
'tags' => '[70,39]',
'youtube_url' => 'https://www.youtube.com/watch?v=VU8cXvlGbvc',
'ingredients' => '[529,64,53,515,32,454,417,530,19,531,65,373]',
'measurements' => '[516,32,32,284,149,81,251,536,330,118,537,206]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
292 => 
array (
'id' => 293,
'tmdb_id' => 52794,
'name' => 'Vegan Chocolate Cake',
'category_id' => 14,
'area_id' => 4,
'instructions' => 'Simply mix all dry ingredients with wet ingredients and blend altogether. Bake for 45 min on 180 degrees. Decorate with some melted vegan chocolate ',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qxutws1486978099.jpg',
'tags' => '[70,36,19]',
'youtube_url' => 'https://www.youtube.com/watch?v=C3pAgB7pync',
'ingredients' => '[113,532,259,20,533,534,260,36]',
'measurements' => '[312,132,538,5,4,132,5,539]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
293 => 
array (
'id' => 294,
'tmdb_id' => 52828,
'name' => 'Vietnamese Grilled Pork (bun-thit-nuong)',
'category_id' => 10,
'area_id' => 13,
'instructions' => 'Slice the uncooked pork thinly, about ⅛". It helps to slightly freeze it (optional).
Mince garlic and shallots. Mix in a bowl with sugar, fish sauce, thick soy sauce, pepper, and oil until sugar dissolves.
Marinate the meat for 1 hour, or overnight for better results.
Bake the pork at 375F for 10-15 minutes or until about 80% cooked. Finish cooking by broiling in the oven until a nice golden brown color develops, flipping the pieces midway.
Assemble your bowl with veggies, noodles, and garnish. Many like to mix the whole bowl up and pour the fish sauce on top, but I like to make individual bites and sauce it slowly.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qqwypw1504642429.jpg',
'tags' => '[]',
'youtube_url' => 'https://www.youtube.com/watch?v=Q3qcQcENzbU',
'ingredients' => '[152,535,536,26,55,23,413,133,102,47,156,112,392]',
'measurements' => '[540,541,542,543,544,201,226,545,495,204,281,246,433]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
294 => 
array (
'id' => 295,
'tmdb_id' => 52838,
'name' => 'Venetian Duck Ragu',
'category_id' => 11,
'area_id' => 11,
'instructions' => 'Heat the oil in a large pan. Add the duck legs and brown on all sides for about 10 mins. Remove to a plate and set aside. Add the onions to the pan and cook for 5 mins until softened. Add the garlic and cook for a further 1 min, then stir in the cinnamon and flour and cook for a further min. Return the duck to the pan, add the wine, tomatoes, stock, herbs, sugar and seasoning. Bring to a simmer, then lower the heat, cover with a lid and cook for 2 hrs, stirring every now and then.
Carefully lift the duck legs out of the sauce and place on a plate – they will be very tender so try not to lose any of the meat. Pull off and discard the fat, then shred the meat with 2 forks and discard the bones. Add the meat back to the sauce with the milk and simmer, uncovered, for a further 10-15 mins while you cook the pasta.
Cook the pasta following pack instructions, then drain, reserving a cup of the pasta water, and add the pasta to the ragu. Stir to coat all the pasta in the sauce and cook for 1 min more, adding a splash of cooking liquid if it looks dry. Serve with grated Parmesan, if you like.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/qvrwpt1511181864.jpg',
'tags' => '[]',
'youtube_url' => 'https://www.youtube.com/watch?v=oWQDVgjB_Lw',
'ingredients' => '[47,323,70,55,14,10,98,249,187,61,62,23,16,537,197]',
'measurements' => '[77,60,129,99,338,37,288,286,32,108,4,5,25,115,114]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
295 => 
array (
'id' => 296,
'tmdb_id' => 52863,
'name' => 'Vegetarian Casserole',
'category_id' => 4,
'area_id' => 1,
'instructions' => 'Heat the oil in a large, heavy-based pan. Add the onions and cook gently for 5 – 10 mins until softened.
Add the garlic, spices, dried thyme, carrots, celery and peppers and cook for 5 minutes.
Add the tomatoes, stock, courgettes and fresh thyme and cook for 20 - 25 minutes.
Take out the thyme sprigs. Stir in the lentils and bring back to a simmer. Serve with wild and white basmati rice, mash or quinoa.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/vptwyt1511450962.jpg',
'tags' => '[34,42]',
'youtube_url' => 'https://www.youtube.com/watch?v=oHmKE9mWtWM',
'ingredients' => '[84,53,55,167,31,60,64,85,131,329,130,251,312,60,292]',
'measurements' => '[32,32,176,5,33,253,120,469,32,32,76,288,123,241,79]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
296 => 
array (
'id' => 297,
'tmdb_id' => 52867,
'name' => 'Vegetarian Chilli',
'category_id' => 4,
'area_id' => 1,
'instructions' => 'Heat oven to 200C/180C fan/ gas 6. Cook the vegetables in a casserole dish for 15 mins. Tip in the beans and tomatoes, season, and cook for another 10-15 mins until piping hot. Heat the pouch in the microwave on High for 1 min and serve with the chilli.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wqurxy1511453156.jpg',
'tags' => '[60]',
'youtube_url' => 'https://www.youtube.com/watch?v=D0bFRVH_EqU',
'ingredients' => '[538,381,249,539]',
'measurements' => '[42,26,26,66]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
297 => 
array (
'id' => 298,
'tmdb_id' => 53000,
'name' => 'Vegetable Shepherds Pie',
'category_id' => 3,
'area_id' => 15,
'instructions' => 'Add Ingredients:

12 cups chopped mixed vegetables
1   cup chopped fresh mushrooms 
1   cup pearl onions

TOPPING:

Preheat oven to 450°. Bake potatoes on a foil-lined baking sheet until tender, about 45 minutes. Let cool slightly, then peel. Press potatoes through a ricer, food mill, or colander into a large bowl. Add butter; stir until well blended. Stir in milk. Season to taste with salt.

FILLING:

Soak dried porcini in 3 cups hot water; set aside. Combine lentils, 1 garlic clove, 1 tsp. salt, and 4 cups water in a medium saucepan. Bring to a boil; reduce heat and simmer, stirring occasionally, until lentils are tender but not mushy, 15–20 minutes. Drain lentils and discard garlic.

Heat 3 Tbsp. oil in a large heavy pot over medium heat. Add onions and cook, stirring occasionally, until soft, about 12 minutes. Add chopped garlic and cook for 1 minute. Stir in tomato paste. Cook, stirring constantly, until tomato paste is caramelized, 2–3 minutes.

Add bay leaves and wine; stir, scraping up any browned bits. Stir in porcini, slowly pouring porcini soaking liquid into pan but leaving any sediment behind. Bring to a simmer and cook until liquid is reduced by half, about 10 minutes. Stir in broth and cook, stirring occasionally, until reduced by half, about 45 minutes.

Strain mixture into a large saucepan and bring to a boil; discard solids in strainer. Stir cornstarch and 2 Tbsp. water in a small bowl to dissolve. Add cornstarch mixture; simmer until thickened, about 5 minutes. Whisk in miso. Season sauce with salt and pepper. Set aside.

Preheat oven to 450°. Toss vegetables and pearl onions with remaining 2 Tbsp. oil, 5 garlic cloves, and rosemary sprigs in a large bowl; season with salt and pepper. Divide between 2 rimmed baking sheets. Roast, stirring once, until tender, 20–25 minutes. Transfer garlic cloves to a small bowl; mash well with a fork and stir into sauce. Discard rosemary. DO AHEAD: Lentils, sauce, and vegetables can be made 1 day ahead. Cover separately; chill.
Arrange lentils in an even layer in a 3-qt. baking dish; set dish on a foil-lined rimmed baking sheet. Toss roasted vegetables with fresh mushrooms and chopped herbs; layer on top of lentils. Pour sauce over vegetables. Spoon potato mixture evenly over.

Bake until browned and bubbly, about 30 minutes. Let stand for 15 minutes before serving.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/w8umt11583268117.jpg',
'tags' => '[2]',
'youtube_url' => '',
'ingredients' => '[66,302,4,45,402,55,360,53,123,62,47,284,87,134,133,61,83,388,349]',
'measurements' => '[279,279,132,546,296,52,5,186,75,61,269,75,37,241]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
298 => 
array (
'id' => 299,
'tmdb_id' => 52917,
'name' => 'White chocolate creme brulee',
'category_id' => 1,
'area_id' => 7,
'instructions' => 'Heat the cream, chocolate and vanilla pod in a pan until the chocolate has melted. Take off the heat and allow to infuse for 10 mins, scraping the pod seeds into the cream. If using the vanilla extract, add straight away. Heat oven to 160C/fan 140C/gas 3.
Beat yolks and sugar until pale. stir in the chocolate cream. Strain into a jug and pour into ramekins. Place in a deep roasting tray and pour boiling water halfway up the sides. Bake for 15-20 mins until just set with a wobbly centre. Chill in the fridge for at least 4 hrs.
To serve, sprinkle some sugar on top of the brûlées and caramelise with a blowtorch or briefly under a hot grill. Leave caramel to harden, then serve.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/uryqru1511798039.jpg',
'tags' => '[14,27,4]',
'youtube_url' => 'https://www.youtube.com/watch?v=LmJ0lsPLHDc',
'ingredients' => '[43,369,260,51,5,5]',
'measurements' => '[532,121,441,21,25,413]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
299 => 
array (
'id' => 300,
'tmdb_id' => 52948,
'name' => 'Wontons',
'category_id' => 10,
'area_id' => 10,
'instructions' => 'Combine pork, garlic, ginger, soy sauce, sesame oil, and vegetables in a bowl.
Separate wonton skins.
Place a heaping teaspoon of filling in the center of the wonton.
Brush water on 2 borders of the skin, covering 1/4 inch from the edge.
Fold skin over to form a triangle, sealing edges.
Pinch the two long outside points together.
Heat oil to 450 degrees and fry 4 to 5 at a time until golden.
Drain and serve with sauce.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/1525876468.jpg',
'tags' => '[12]',
'youtube_url' => 'https://www.youtube.com/watch?v=9h9No18ZyCI',
'ingredients' => '[152,28,27,133,136,64,85,176,540,17,36]',
'measurements' => '[173,164,5,117,5,239,239,270,66,534,547]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
300 => 
array (
'id' => 301,
'tmdb_id' => 53062,
'name' => 'Walnut Roll Gužvara',
'category_id' => 1,
'area_id' => 16,
'instructions' => 'Mix all the ingredients for the dough together and knead well. Cover the dough and put to rise until doubled in size which should take about 2 hours. Knock back the dough and knead lightly.

Divide the dough into two equal pieces; roll each piece into an oblong about 12 inches by 8 inches. Mix the filling ingredients together and divide between the dough, spreading over each piece. Roll up the oblongs as tightly as possible to give two 12 inch sausages. Place these side by side, touching each other, on a greased baking sheet. Cover and leave to rise for about 40 minutes. Heat oven to 200ºC (425ºF). Bake for 30-35 minutes until well risen and golden brown. Bread should sound hollow when the base is tapped.

Remove from oven and brush the hot bread top with milk. Sift with a generous covering of icing sugar.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/u9l7k81628771647.jpg',
'tags' => '[41]',
'youtube_url' => 'https://www.youtube.com/watch?v=Q_akngSJVrQ',
'ingredients' => '[19,5,126,21,16,18,2,273,2,275,14,16,118]',
'measurements' => '[353,548,133,17,549,49,10,67,276,276,5,112,112]',
'created_at' => '2025-04-15 09:39:33',
'updated_at' => '2025-04-15 09:39:33',
),
301 => 
array (
'id' => 302,
'tmdb_id' => 52871,
'name' => 'Yaki Udon',
'category_id' => 4,
'area_id' => 19,
'instructions' => 'Boil some water in a large saucepan. Add 250ml cold water and the udon noodles. (As they are so thick, adding cold water helps them to cook a little bit slower so the middle cooks through). If using frozen or fresh noodles, cook for 2 mins or until al dente; dried will take longer, about 5-6 mins. Drain and leave in the colander.
Heat 1 tbsp of the oil, add the onion and cabbage and sauté for 5 mins until softened. Add the mushrooms and some spring onions, and sauté for 1 more min. Pour in the remaining sesame oil and the noodles. If using cold noodles, let them heat through before adding the ingredients for the sauce – otherwise tip in straight away and keep stir-frying until sticky and piping hot. Sprinkle with the remaining spring onions.',
'thumbnail_url' => 'https://www.themealdb.com/images/media/meals/wrustq1511475474.jpg',
'tags' => '[76]',
'youtube_url' => 'https://www.youtube.com/watch?v=5Iy0MCowSvA',
'ingredients' => '[541,136,53,169,304,176,384,133,5,175]',
'measurements' => '[79,25,86,550,251,60,257,25,253,253]',
'created_at' => '2025-04-15 09:39:34',
'updated_at' => '2025-04-15 09:39:34',
),
));
        
        
    }
}