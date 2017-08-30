
<?php if(CheckPermission("Customers", "all_read,own_read")){ ?>
					<li class="<?=($this->router->class==="customers")?"active":"not-active"?>">
						<a href="<?php echo base_url("admin/customers"); ?>" data-crud_id="490" class="EditCrud"><i class="glyphicon glyphicon-star"></i> <span><?php echo lang('customers'); ?></span></a>
					</li><?php }?>
<?php if(CheckPermission("Products", "all_read,own_read")){ ?>
					<li class="<?=($this->router->class==="products")?"active":"not-active"?>">
						<a href="<?php echo base_url("admin/products"); ?>" data-crud_id="492" class="EditCrud"><i class="glyphicon glyphicon-sound-dolby"></i> <span><?php echo lang('products'); ?></span></a>
					</li><?php }?>
