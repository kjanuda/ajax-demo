<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
echo '<response>';

$name = $_GET['name'];
$usernameFoodMap = array(
    '1975' => 'The inaugural World Cup in 1975 witnessed a classic battle between West Indies and Australia at the iconic Lords Cricket Ground in London. West Indies emerged victorious, securing their place in cricket history by defeating Australia by 17 runs. The pulsating energy of that encounter set the stage for future cricketing epics.',
    '1979' => 'Four years later, in 1979, West Indies returned to the final, facing England once again at Lords. The Caribbean dominance continued as they clinched the title with a resounding 92 run victory showcasing their prowess and establishing themselves as cricketing powerhouses.',
    '1983' => 'The 1983 World Cup final marked a significant turning point when India, led by the visionary Kapil Dev, faced the mighty West Indies at Lords. In a stunning upset, India triumphed by 43 runs, securing their maiden World Cup and leaving an indelible mark on the cricketing world.',
    '1987' => 'The 1987 final witnessed Australia and England battling it out at Eden Gardens in Kolkata. Australia emerged victorious, claiming the title with a narrow 7-run victory in a thrilling encounter that captivated cricket enthusiasts worldwide.',
    '1992' => 'Pakistan made history in 1992 as they squared off against England at the Melbourne Cricket Ground. The final showcased Pakistans brilliance, and they sealed the victory by 8 wickets, marking their first World Cup triumph.',
    '1996' => 'Sri Lankas ascent to cricketing glory occurred in 1996 when they faced Australia in the final at Lahore Cricket Ground. Sri Lankas clinical performance resulted in a convincing 7-wicket win, and the island nation celebrated its maiden World Cup victory.',
    '1999' => 'The 1999 final at Lords witnessed Australia dominating against Pakistan, securing the title with an 8-wicket win. Australia continued their remarkable run in the tournament, establishing themselves as a cricketing powerhouse.',
    '2003' => 'The 2003 final at Wanderers Stadium in Johannesburg showcased Australias dominance once again, this time against India. Australia emerged victorious with a commanding 125-run win, reaffirming their status as the team to beat.',
    '2007' => 'In 2007, Australia faced Sri Lanka in a rain-affected final at Kensington Oval in Bridgetown. Despite the challenging conditions, Australia prevailed, winning by 53 runs and securing their third consecutive World Cup title.',
    '2011' => 'India reclaimed the World Cup in 2011 with a memorable win against Sri Lanka at Wankhede Stadium in Mumbai. A composed batting performance led by Gautam Gambhir and MS Dhoni ensured Indias victory by 6 wickets.',
    '2015' => 'The 2015 final at the Melbourne Cricket Ground witnessed Australia and New Zealand in a battle for supremacy. Australia clinched their fifth title with a 7-wicket victory, showcasing their dominance on home soil.',
    '2019' => 'The most recent World Cup final in 2019, between England and New Zealand at Lords, entered the history books. The match ended in a dramatic tie, leading to a Super Over, a first in World Cup finals. England emerged victorious, clinching their maiden title based on boundary count.',
    '2023' => 'Comming soon....'
);

if (array_key_exists($name, $usernameFoodMap)) {
    $food = $usernameFoodMap[$name];
    echo "Year, $name!  is $food.";
} else if (trim($name == '')) {
    echo 'ICC World Cup years. Please enter The Year.';
} else {
    echo htmlentities($name) . ', This not a ICC World Cup Year.';
}
echo '</response>';
?>