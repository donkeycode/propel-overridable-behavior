<?php foreach ($getters as $col => $getter) : ?>
public function <?php echo $getter['public']; ?>()
{
    if ($overrided = $this-><?php echo $getter['overrided']; ?>()) {
        return $overrided;
    }

    return $this-><?php echo $getter['original']; ?>();
}

<?php endforeach; ?>

<?php foreach ($setters as $col => $setter) : ?>
public function <?php echo $setter['public']; ?>($v = null)
{
    return $this-><?php echo $setter['overrided']; ?>($v);
}

<?php endforeach; ?>