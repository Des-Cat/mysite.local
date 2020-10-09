<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'Good.Cat');
if ($connect = true)
{
    echo "Connection complete!";
}
else
    echo "Connection error!";