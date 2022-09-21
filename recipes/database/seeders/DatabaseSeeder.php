<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

      $user1 = \App\Models\User::factory()->create([
        'name' => 'John Johnny',
        'email' => 'user1@example.com',
        'password' => Hash::make('12345678')
      ]);

      $user2 = \App\Models\User::factory()->create([
        'name' => 'Ana Anny',
        'email' => 'user2@example.com',
        'password' => Hash::make('12345678')
      ]);

      $user3 = \App\Models\User::factory()->create([
        'name' => 'Joe Joey',
        'email' => 'user3@example.com',
        'password' => Hash::make('12345678')
      ]);

      $user4 = \App\Models\User::factory()->create([
        'name' => 'Rob Robby',
        'email' => 'user4@example.com',
        'password' => Hash::make('12345678')
      ]);

      
      Recipe::create([
        'user_id' => $user1->id,
        'title' => 'Spaghetti Aglio e Olio (Pasta With Garlic and Oil)',
        'description' => 'Consider this recipe a framework that you can build on 
        depending on your mood. You can bump up (or down) the garlic or chiles, 
        experiment with different types of pasta, or try any of the suggested riffs below: 
          Squeeze half a lemon over the spaghetti when you add the salt and Parmesan. 
          Add one (or a few) oil-packed anchovy filets to the olive oil when you 
          add the garlic and chiles. Use the back of a fork to mash the tiny fish into a purée as it heats. 
          Add a few cans of chopped, drained clams when you add the pasta water. 
          Toss in a big handful of baby arugula while the spaghetti is still piping hot. Stir to wilt. 
          Pile your favorite sautéed shrimp on top of the spaghetti before you set it on the table. 
          Sauté small broccoli florets in olive oil and stir into the spaghetti.
          Crumble cooked, chopped pancetta or bacon over the top along with the parsley.',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user1->id,
        'title' => 'Air Fryer Salmon',
        'description' => 'Prepare the air fryer basket: 
          Lightly spray the inside of the air fryer basket with nonstick cooking spray.
          
          Season the salmon: 
          Place the salmon on a plate skin side down. Drizzle the tops (the skinless sides) with
          olive oil and season with lemon pepper, salt, and black pepper.',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user2->id,
        'title' => 'Sheet Pan Gnocchi with Zucchini, Tomatoes, and Bell Peppers',
        'description' => 'This recipe calls for zuchinni noodles (or “zoodles”),
         which are often available in the refrigerated section of markets and 
         cut down on the dish’s prep time. If your market doesn’t carry them, 
         you can make your own using a spiralizer or a mandoline with a shredding
          blade, or just cut your squash into ½-inch cubes instead. 

          There are a number of different techniques out there for seeding bell
           peppers, but I still prefer the one I learned in high school, when I 
           worked for a caterer one summer. First, cut out stem with a small sharp 
           knife (cutting around the base of the stem, so you don’t remove much of the flesh). 
          
          Next, hold the pepper upside down over a bowl, trash, or compost bin and 
          use your fingers to pull out the white interior ribs. 
          
          Lastly, with the pepper still over the bin, tap the pepper firmly onto to palm of 
          your opposite hand; the motion will dislodge the seeds, and they’ll fall straight into the receptacle. ',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user2->id,
        'title' => 'Fresh Corn Pasta',
        'description' => 'While corn on the cob is probably the purest
         way to enjoy the seasonal vegetable, it’s also nice to turn it
          into a quick and easy main meal. This creamy pasta keeps fresh
           sweet corn front and center where it belongs. A simple sauce 
           of corn, cream, garlic, shallot, and Parmesan comes together
            very quickly, with red pepper flakes adding a touch of heat
             and fresh lemon and parsley keeping things bright.

        Creamy corn pasta sits somewhere between creamed corn and mac and 
        cheese, while being lighter and more satisfying than either dish. 
        Ready in under 30 minutes, it’s an excellent summertime main course. 
        Serve it simply with a summer salad, a veggie side, or some grilled
         fish, shrimp, or chicken for a well-rounded meal.',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user2->id,
        'title' => 'Whole Grilled Eggplant',
        'description' => 'Since the amount of ingredients in this 
        recipe is minimal, it’s important to make each one count. 

        Extra virgin olive oil: Opt for high-quality extra virgin 
        olive oil. Anything cold pressed will taste great and bring 
        richness to this subtle dish. Plus, it’ll be nice to have in the pantry for future salad dressings. 
        Flaky sea salt: Use a flaky finishing sea salt, like Maldon for this recipe.
        Black pepper: Use whole black peppercorns and coarsely grind
         right before serving for the freshest taste with a natural 
         textural variety that pre-ground black pepper won’t deliver. ',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user3->id,
        'title' => 'Salmon with Brown Sugar Glaze',
        'description' => 'The good news is that all salmon are well 
        suited for baking. There are many varieties to choose from, likecoho
         or chinook. My only advice is to buy the best quality salmon 
         that you can afford. Here are a few interesting facts that I hope
          will help you make an educated decision:

          Cues for the best salmon: Look for fish that has super silvery 
          skin and flesh that is moist and bright in color. Steer clear if it smells too “fishy” or if it’s dull and slimy.
          Wild caught vs. farm raised: It is important to me that the salmon
           I buy be wild caught and sustainably harvested. That typically means it’s a Pacific or Alaskan salmon. Farm raised salmon are bred in pens, which can be a breeding ground for harmful toxins. Salmon labeled as Atlantic is most likely farm raised since fishing for wild Atlantic salmon is illegal in the U.S. For good measure, check the Monterey Bay Aquarium Seafood Watch to learn best practices for buying fish. 
          Organic? Fun fact: There is no USDA label for organic salmon or any 
          fish for that matter. Salmon labeled as organic has most likely been farmed.
          Fresh vs frozen: I don’t typically like to deal with thawing 
          frozen fish, especially when I need an impromptu weeknight dinner. 
          However, it’s a great option if you do not procrastinate like your
           author here. Frozen salmon is flash frozen upon catching to gear
            up for the long road to markets and grocery stores—this retains
             its freshness. To thaw, place the frozen fish on a plate and pop
              it in the fridge the night before you plan to serve it. ',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user3->id,
        'title' => 'Corn and Ricotta Bruschetta',
        'description' => 'If you’re making a toast hearty enough for a meal,
         you’ll want to start with a hearty bread. A whole grain batard or
          boule, cut into thick slices, is ideal. Both breads are wonderfully
           flavorful and sturdy enough to hold a big pile of toppings. If
            your loaf is relatively wide (like a big round French miche), 
            cut the whole thing in half, then put it cut-side down on the 
            cutting board, and slice it from the top down for good-sized slices. 

        If you’d prefer to make smaller versions of these toasts (to put
         on a snack board, for instance) you can cut the slices up into quarters
          of sixths, or simply start with a baguette. These smaller pieces 
          can be toasted in a 400°F oven for about 15 minutes. 
        
        ',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user4->id,
        'title' => 'Sesame Soba Noodles',
        'description' => 'Sesame soba noodles are an all-star packed lunch
         for my kindergartener, middle schooler, and work-from-home husband alike.
          It’s got all the hits: springy, nutty soba noodles, a little sweetness,
           and the perfect trio of soy sauce, sesame seeds, and so much sesame oil. 

        Despite being a trained chef, packing a not-sad lunch for my family is 
        a drag. This is the recipe I turn to again and again. From starting to 
        zipping up the lunch bags and pushing the kids out the door for school, 
        it takes 15 minutes. If I’m in the headspace to plan, I make it the night
         before and keep it in the fridge. ',
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user4->id,
        'title' => 'Easy Grilled Pork Chops',
        'description' => "A rib chop, sometimes called a center-cut rib 
        chop, is my go-to cut. It has a bone that runs along one side and
         a border of fat. On the grill, the fat melts and the marrow in the
          bone caramelizes, which translates to a whole lot of good feelings that ensue as we dig in! 

          I prefer a cut that is 2 inches thick. Any thinner, it is more
           likely to dry out on the grill or get too salty in the brine.
          
          Boneless chops, although pricier, are an option if you're looking 
          for an all-around leaner cut of meat. They are basically rib chops 
          with the bone and some of the fat trimmed off. My family isn’t shy 
          about a generous ribbon of fat, so I hardly trim any off. Leave at
           least a 1/8-inch layer of it on since fat adds flavor as it renders on the grill. ",
        'likes' => rand(1, 100)
      ]);

      Recipe::create([
        'user_id' => $user4->id,
        'title' => 'Ground Beef Bulgogi from',
        'description' => "Ground beef gets a bad rap from snobby foodie 
        types, but since it’s something I grew up eating, I prefer to see 
        the positive—​it’s an incredibly affordable and versatile starting point
         for families looking to save money (a.k.a., all families). It’s all about what you do with it.


        In this recipe, we’re using it to prepare a version of bulgogi, 
        one of the most popular dishes in Korean cuisine, both in restaurants
         and in homes. Typically prepared with fancier cuts of beef, bulgogi
          rests in a mild, balanced marinade for hours (ideally overnight) before
           getting crispy and caramelized on the grill. This recipe delivers all 
           that flavor on a hamburger budget. Sweet and salty, it’s a flexible base
            that can be served with lettuce wraps, rice, noodles, or rolled up into homemade Kimbap.
        
        Read our interview with Peter Serpico about his book, , and his 
        journey as an American chef understanding his Korean roots through food.",
        'likes' => rand(1, 100)
      ]);

    }
}
