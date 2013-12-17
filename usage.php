<?php
$msg = "Reposting from FB for all concerned medical volunteers: Compassion in crisis. Day 8. Had the privilege to sit in on Health Secretary Ona's debriefing with his core team after his field visit yesterday. From the air, it looked like an atomic bomb had been detonated --- He was deeply moved by the overwhelming international support -- relief goods and medical teams. Like a commander in the middle of a war, he ordered doubling of all prepositioned supplies and announced additional deployments to more than a thousand personnel who are already on the ground. He was concerned about saturation of foreign medical teams in Tacloban. Usec Ted Herbosa - who is an internationally recognized expert in mass casualties and trauma management is assigned to rationalize deployment of all foreign medical teams. Ted calls it a happiness problem ---  we have a lot of help, but we need to see to it that it goes to those who need it most. But this can only happen if all medical teams coordinate with the DOH. WHO is helping set up the information systems and mapping of resources. Through FB please get the word out that all foreign medical teams that are organized by your church, alumni society, civic organization, professional group --- need to coordinate with Ted at 0917 793 6426 or through FB. This is going to be a marathon, not a sprint. As WHO is helping out as well, you can email me at mercados@wpro.who.int. I will see to it that it gets to the right people and that your team will go to a place where they can make a difference. ";
$count = 5;
$tolerance = 0.20;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://localhost/tagrec/tagrec.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(array('msg' => "{$msg}", 'count' => "{$count}", 'tolerance' => "{$tolerance}")));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;