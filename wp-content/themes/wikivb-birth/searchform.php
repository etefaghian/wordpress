<form method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>/">
    <div>
        <input type="text"  value="کليد واژه + اينتر" onblur="if (this.value == '') this.value = 'کليد واژه + اينتر';" onfocus="if (this.value == 'کليد واژه + اينتر') this.value = '';" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="" />
    </div>
</form>