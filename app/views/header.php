<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if(isset($page_title)) echo $page_title; ?></title>
<meta http-equiv="Pragma" content="no-cache" />
<meta name="keywords" content="<?php if(isset($meta_keywords))  echo $meta_keywords; ?>" />
<meta name="description" content="<?php if(isset($meta_description))  echo $meta_description;  ?>" />
<link href="<?php echo base_url() ?>app/css/css/common.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo base_url() ?>app/css/css/header.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>app/css/css/st.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>app/css/css/menus.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>app/css/css/icons.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon" />

<script type="text/javascript" src="<?php echo base_url() ?>app/js/prototype.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>app/js/scriptaculous.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>app/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>app/js/clock.js"></script>
<!--[if IE ]>
<link href="<?php echo base_url() ?>app/css/css/iefix.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div class="clsContainer">
  <!--HEADER-->
  <div id="header">
    <div id="selLeftHeader">
	<div id="selLogo">
      <h1><a href="<?php echo base_url() ?>"><?php echo $this->lang->line('Flps Lance');?></a></h1>
    </div>
	</div>
	<div id="selRightHeader">

	<div id="subMenu">
      <?php if(!isset($current_page))
    $current_page = '';?>
      <?php if($current_page == 'home'){?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" class="current"><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>"><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>"><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php }
        elseif($current_page == 'buyer'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>"><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" class="current"><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        elseif($current_page == 'provider'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>"><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" ><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>" class="current"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        elseif($current_page == 'rss'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>"><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" ><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>" class="current"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        elseif($current_page == 'post_project'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>" class="current"><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" ><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        elseif($current_page == 'faq'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>" ><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" ><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>" class="current"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        elseif($current_page == 'reports'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>" ><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" ><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>" class="current"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        elseif($current_page == 'contact'){
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>" ><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>" ><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>" ><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>" class="current"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }
        else {
        ?>
      <ul class="clearfix">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('Home');?></a></li>
        <li><a href="<?php echo site_url('project/create'); ?>"><?php echo $this->lang->line('Post Projects'); ?></a></li>
        <li><a href="<?php echo site_url('buyer/signUp'); ?>"><?php echo $this->lang->line('Buyers'); ?></a></li>
        <li><a href="<?php echo site_url('programmer/signUp'); ?>"><?php echo $this->lang->line('Programmers'); ?></a></li>
        <li><a href="<?php echo site_url('?c=rss'); ?>"><?php echo $this->lang->line('Feeds'); ?></a></li>
        <li><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Faqs'); ?></a></li>
        <li><a href="<?php echo site_url('reports'); ?>"><?php echo $this->lang->line('Reports'); ?></a></li>
        <li><a href="<?php echo site_url('contact'); ?>"><?php echo $this->lang->line('Contact'); ?></a></li>
      </ul>
      <?php
        }?>
    </div>
	</div>
  </div>
  <!--END OF HEADER-->
  <!-- search-->
 <div id="selSearch" class="clearfix">
      <form method="get" name="searchForm" action="<?php echo base_url(); ?>">
        <div class="clsRadio clsFloatLeft">
          <?php
if($this->session->userdata('group1'))
$group1 = $this->session->userdata('group1');
//echo $group1;exit;
?>
          <p>
            <input type="radio" id="work" name="group1" onclick="checkPopular('work')" value="Projects"
	  <?php if(isset($group1) && $group1 == 'Projects') 
	  {
	   echo 'checked="checked"';
	   
	   }
	   elseif($this->session->userdata('group1') == ''){
	   	echo 'checked="checked"';
	   }
	  
	  
	   ?> />
            Find Projects </p>
          <p>
            <input type="radio" id="prof" name="group1" onclick="checkPopular('proff')" value="Providers" 
	  <?php 
	  if(isset($group1)) 
	  { 
	  if($group1=='Providers') 
	 echo 'checked="checked"';
		 } ?>    />
            Find Freelancers</p>
        </div>
          <div class="clsMin clsFloatLeft">
            <div class="clsMinSearch">
              <p>
                <input type="text" name="keyword" id="keyword" class="clsText"/>
                <input type="hidden" value="search" name="c"/>
<select name="category" >
                  <option value="">All Categories</option>
                  <?php
	 if(isset($categories))
	 {
	 foreach($categories->result() as $cat)
	   {?>
                  <option value="<?php echo $cat->category_name; ?>"><?php echo $cat->category_name; ?></option>
                  <?php  
	   }
	   }   ?>
                </select>
                <input type="submit" value="<?php echo $this->lang->line('Search');?>" class="bt_submit"  />
              </p>
            </div>
            <?php
	  if(isset($_REQUEST['m']))
	  {
	  	if($_REQUEST['m']=='professional')
		{
			if(isset($popular_provid) and $popular_provid->num_rows()>0)
{ 
?>
            <div id="innerCont">
              <ul>
                <li class="clsBlack"><?php echo $this->lang->line('Popular searches:');?></li>
                <?php 
		$i=0;
		foreach($popular_provid->result() as  $popular_provid)
		{ 
		if($i<=10)
		{
		 if(isset($control))
		  { ?>
                <li><a href="<?php echo base_url()."?category=&amp;c=".$control."&amp;m=".$m."&amp;keyword=".urlencode($popular_provid->keyword);?>"><?php echo $popular_provid->keyword;?></a></li>
                <?php 
		  } else
		  {
		  
		?>
                <li><a href="<?php echo base_url()."?category=&amp;c=search&amp;m=professional&amp;keyword=".urlencode($popular_provid->keyword);?>"><?php echo $popular_provid->keyword;?></a></li>
                <?php 
		   }
		$i++;
		} } ?>
              </ul>
            </div>
            <?php
} 
		}
		else
		{
			if(isset($popular) and $popular->num_rows()>0)
{ ?>
            <div id="innerCont">
              <ul>
                <li class="clsBlack"><?php echo $this->lang->line('Popular searches:');?></li>
                <?php 
		$i=0;
		foreach($popular->result() as  $popular)
		{ 
		if($i<=10)
		{
		 if(isset($control))
		  { ?>
                <li><a href="<?php echo base_url()."?category=&amp;c=".$control."&amp;m=".$m."&amp;keyword=".urlencode($popular->keyword);?>"><?php echo $popular->keyword;?></a></li>
                <?php 
		  } else
		  {
		  
		?>
                <li><a href="<?php echo base_url()."?group1=Projects&category=&amp;c=search&amp;m=index&amp;keyword=".urlencode($popular->keyword);?>"><?php echo $popular->keyword;?></a></li>
                <?php 
		   }
		$i++;
		} } ?>
              </ul>
            </div>
            <?php
} 
		}
	  }
	  else
	  {
	  	
		if(isset($_REQUEST['group1']) and $_REQUEST['group1']=='Providers')
		{  ?>
            <div id="innerCont">
              <ul>
                <li class="clsBlack"><?php echo $this->lang->line('Popular searches:');?></li>
                <?php 
		$i=0;
		foreach($popular_provid->result() as  $popular_provid)
		{ 
		if($i<=10)
		{
		 if(isset($control))
		  { ?>
                <li><a href="<?php echo base_url()."?category=&amp;c=".$control."&amp;m=".$m."&amp;keyword=".urlencode($popular_provid->keyword);?>"><?php echo $popular_provid->keyword;?></a></li>
                <?php 
		  } else
		  {
		  
		?>
                <li><a href="<?php echo base_url()."?category=&amp;c=search&amp;m=professional&amp;keyword=".urlencode($popular_provid->keyword);?>"><?php echo $popular_provid->keyword;?></a></li>
                <?php 
		   }
		$i++;
		} } ?>
              </ul>
            </div>
            <?php }
		else
		{
		if(isset($popular) and $popular->num_rows()>0)
{ ?>
            <div id="innerCont">
              <ul>
                <li class="clsBlack"><?php echo $this->lang->line('Popular searches:');?></li>
                <?php 
		$i=0;
		foreach($popular->result() as  $popular)
		{ 
		if($i<=10)
		{
		 if(isset($control))
		  { ?>
                <li><a href="<?php echo base_url()."?category=&amp;c=".$control."&amp;m=".$m."&amp;keyword=".urlencode($popular->keyword);?>"><?php echo $popular->keyword;?></a></li>
                <?php 
		  } else
		  {
		  
		?>
                <li><a href="<?php echo base_url()."?category=&amp;c=search&amp;m=index&amp;keyword=".urlencode($popular->keyword);?>"><?php echo $popular->keyword;?></a></li>
                <?php 
		   }
		$i++;
		} } ?>
              </ul>
            </div>
            <?php
} 
	  }  }?>
            <!--<div id="innerCont11">
	    <?php /* echo $this->
            lang->line('Popular searches:');?>
            <?php 
if(isset($popular) and $popular->num_rows()>0)
{ ?>
            <?php
	foreach($popular->result() as $popular)
	{
		?>
            <a href="<?php echo base_url()."?category=&c=search&keyword=".urlencode($popular->keyword);?>"><?php echo $popular->keyword;?></a>
            <?php 
	} ?>
            <?php
} */ ?>
          </div>
          --> </div>

        <?php /*?> <div id="selHelpMe" class="clsFloatRight">
	<a class="clsHelp" href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('Help'); ?></a>
	  </div><?php */?>
      </form>
    </div>
<!-- end of search--> 
  <!--CONTENT-->
  <div id="content">