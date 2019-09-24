<?php
header('Access-Control-Allow-Origin: *'); 

    include('simple_html_dom.php');
 

$data = Array(
    0 => array(
        "title"=> "Wydarzenie parafialne 1",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis <b>scelerisque</b> ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    1 => array(
        "title"=> "Wydarzenie parafialne 2",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    2 => array(
        "title"=> "Wydarzenie parafialne 3",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    3 => array(
        "title"=> "Wydarzenie parafialne 4",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    4 => array(
        "title"=> "Wydarzenie parafialne 5",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    5 => array(
        "title"=> "Wydarzenie parafialne 6",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    6 => array(
        "title"=> "Wydarzenie parafialne 7",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    7 => array(
        "title"=> "Wydarzenie parafialne 8",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    8 => array(
        "title"=> "Wydarzenie parafialne 9",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    9 => array(
        "title"=> "Wydarzenie parafialne 10",
      "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
      "date"=>"2019-01-21"
    ),
    10 => array(
      "title"=> "Wydarzenie parafialne 11",
    "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
    "date"=>"2019-01-21"
  ),
  11 => array(
    "title"=> "Wydarzenie parafialne 12",
  "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc.",
  "date"=>"2019-01-20"
),
);

// $start=0;
// $stop=0;




    echo json_encode($data);

?>