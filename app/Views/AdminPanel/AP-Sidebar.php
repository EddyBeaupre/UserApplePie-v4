<?php
/**
* Admin Panel Sidebar View
*
* UserApplePie
* @author David (DaVaR) Sargent <davar@userapplepie.com>
* @version 4.2.0
*/
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <ul class="nav menu">
    <li <?php if($title == "Dashboard"){echo "class='active'";} ?>><a href="<?php echo DIR; ?>AdminPanel"><i class='fas fa-cog'></i> Dashboard</a></li>
    <li <?php if($title == "Settings"){echo "class='active'";} ?>><a href="<?php echo DIR; ?>AdminPanel-Settings"><i class='fas fa-cog'></i> Settings</a></li>
    <li <?php if($title == "System Route" || $title == "System Routes"){echo "class='active'";} ?>><a href="<?php echo DIR; ?>AdminPanel-SystemRoutes"><i class='fas fa-cog'></i> System Routes</a></li>
    <li <?php if($title == "Users" || $title == "User"){echo "class='active'";} ?>><a href="<?php echo DIR; ?>AdminPanel-Users"><i class='fas fa-user'></i> Users</a></li>
    <li <?php if($title == "Groups" || $title == "Group"){echo "class='active'";} ?>><a href="<?php echo DIR; ?>AdminPanel-Groups"><i class='fas fa-tower'></i> Groups</a></li>
    <li <?php if($title == "Mass Email"){echo "class='active'";} ?>><a href="<?php echo DIR; ?>AdminPanel-MassEmail"><i class='fas fa-envelope'></i> Mass Email</a></li>
  </ul>

    <?php
      /* Check to see if Forum Plugin is installed. If so then show forum admin links */
      if(file_exists(ROOTDIR.'app/Plugins/Forum/Controllers/ForumAdmin.php')){
    ?>
      <ul class="nav menu">
        <li class="sidebar-title">Forum</li>
        <li <?php if($title == "Forum Global Settings"){echo "class='active'";} ?>>
          <a href='<?php echo DIR; ?>AdminPanel-Forum-Settings'><i class='fas fa-cog'></i> Global Settings</a>
        </li>
        <li <?php if($title == "Forum Categories"){echo "class='active'";} ?>>
          <a href='<?php echo DIR; ?>AdminPanel-Forum-Categories'><i class='fas fa-list'></i> Categories</a>
        </li>
        <li <?php if($title == "Forum Blocked Content"){echo "class='active'";} ?>>
          <a href='<?php echo DIR; ?>AdminPanel-Forum-Blocked-Content'><i class='fas fa-remove-sign'></i> Blocked Content</a>
        </li>
      </ul>
    <?php } ?>
</div>
