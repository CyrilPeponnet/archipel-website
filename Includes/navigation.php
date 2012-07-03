<!--
    download.php

    Copyright (C) 2010 Antoine Mercadal <antoine.mercadal@inframonde.eu>
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<?php require_once("Includes/restrict.php"); ?>

<?php
function should_highlight($associated_file)
{
    if (basename($_SERVER["SCRIPT_FILENAME"]) == $associated_file)
        echo "current";
}

?>
<!-- BEGIN: NAVIGATION -->
<div class="navigation">
    <a href="index.php"><img alt="Logo" src="Images/logo.png" class="logo"></a>

    <div class="social-buttons slow-fade-out">
        <a href="http://flattr.com/thing/729509/Archipel-Official-WebSite" target="_blank">
            <img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" />
        </a>
        <a href="https://twitter.com/archipelproject" class="social-button twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @archipelproject</a>
    </div>

    <div class="link-container">
        <a class="item <?php echo should_highlight("index.php"); ?>" href="index.php">Home</a>
        <a class="item <?php echo should_highlight("download.php"); ?>" href="download.php">Download</a>
        <a class="item <?php echo should_highlight("chat.php"); ?>" href="chat.php">Chat</a>
        <a class="item" href="http://github.com/ArchipelProject/Archipel">Source</a>
        <a class="item" href="http://archipelproject.tumblr.com">Blog</a>
        <a class="item" href="http://github.com/ArchipelProject/Archipel/wiki">Documentation</a>


    </div>
</div>

<div class="clear"></div>
<!-- END: NAVIGATION -->
