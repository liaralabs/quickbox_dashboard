<ul class="dropdown-menu pull-right">
  <li><span style="margin-top:5x"></span></li>
  <li><a href="https://plaza.quickbox.io/c/quickbox-support" target="_blank"><i class="fa fa-warning text-warning"></i> Report an issue </a></li>
  <li><a href="https://quickbox.io/donate" target="_blank"><i class="fa fa-heart text-danger"></i> Donate </a></li>
  <div class="usermenu-div"></div>
  <li style="border-bottom:1px solid #3a3a3a"><pre style="font-size:10px; color: #aaa; padding-bottom:4px">QuickBox Version :: <?php echo "$version"; ?></pre></li>
  <!--li><pre style="font-size:10px; color: #ccc">Current Version   :: <?php echo "$current_vs"; ?></pre></li-->
  <?php if ($username == "$master"){
    //if ($current_vs > $version){
      echo "<li><a href=\"?updateQuickBox=true\" data-toggle=\"modal\" data-target=\"#sysResponse\" style=\"\"><i class=\"fa fa-bell text-success\"></i> Check for updates </a></li>";
    //}
  }
  ?>
  </span></li>
</ul>
