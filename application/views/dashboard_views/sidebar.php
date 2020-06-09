<?php 
$image = get_details('image');
$first_name = get_details('first_name');
$last_name = get_details('last_name');
$account_type = get_details('account_type');
$rating = get_details('review');
$rating = show_rating($rating);
?>
<div id="dashboard-sidebar">
<img class="avatar-2" src="<?= base_url().'assets/images/'.$image?>" 
alt="profile picture">

<h3 class="heading-2 center"><?=$first_name.' '.$last_name?></h3>
<h3 class="heading-2"><?= $rating?></h3>
<ul class="list-d-a ">
<li>
<a href="<?=base_url()?>dashboard/jobs">Jobs</a>
</li>
<li>
<a href="<?=base_url()?>dashboard/settings">Settings</a>
</li>
<?php
  if($account_type == "seller")
  {?>
  <li>
    <a href="<?=base_url()?>dashboard/gigs">Gigs</a>
  </li>
  <?php
  }
?>
</ul>
</div>