<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once '../controller/ActorController.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sakila Actors</title>
        <style type="text/css">
            table
            {
               border: 1px solid purple;
            }
            th, td
            {
               border: 1px solid red;
            }
        </style>
    </head>
    <body>
        <?php
            if(!empty($lastOperationResults)):
        ?>
        <h2><?php echo $lastOperationResults; ?></h2>
        <?php
            endif;
        ?>
        <h1>Current Actors:</h1>
        <table>
            <thead>
                <tr>
                    <th>Actor ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Update</th>
	                <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($arrayOfActors as $actor):
                        
                    ?>
                        <tr>
                            <td><?php echo $actor->getID(); ?></td>
                            <td><?php echo $actor->getFirstName(); ?></td>
                            <td><?php echo $actor->getLastName(); ?></td>
                            <td>
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idUpdate=<?php echo $actor->getID(); ?>">
                                    <img src="/images/edit_icon.png" height="25px" width="25px"/>
                                </a>
                            </td>
	                        <td>
	                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idDelete=<?php echo $actor->getID(); ?>">
		                        <img src="/images/delete_icon.png" height="25px" width="25px"/>
	                        </a>
							</td>
                        </tr>
                    <?php
                    endforeach;
                ?>


            </tbody>
	        <a href=<?php $ActorController->createActor() ?>>Create an Actor</a>
            <tfoot></tfoot>
        </table>  
    </body>
</html>
