<div class="shopping-cart section">
<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>Produit</th>
								<th>Description</th>
								<th class="text-center">Prix Unitaire</th>
								<th class="text-center">Quantité en stock</th>
								<th class="text-center">Abonnement mensuel</th> 
								<th class="text-center"><i class="fas fa-cart-arrow-down"></i></th>
							</tr>
						</thead>
						<tbody>
                        <?php for($i=0;$i<count($all);$i++){ ?>
							<tr>
								<td class="product-name" l>
                                    <p><?php echo $all[$i]['nom']; ?></p>
                                </td>
								<td class="product-des">
									<p class="product-des"><?php echo $all[$i]['description']; ?></p>
								</td>
								<td class="price"><span>Ar <?php echo $all[$i]['prixunitaire']; ?></span></td>
								<td class="total-amount"><span><?php echo $all[$i]['nombre']; ?></span></td>
                                <td class="total-amount"><span> Ar <?php echo $all[$i]['prixabonnementservice']; ?></span></td>
								<td class="action"><a href="<?php echo  site_url('ventes/acheter?id=') ; echo $all[$i]['idproduitsdevente']; ?>"><i class="fas fa-cart-plus"></i></a></td>
							</tr>
                        <?php } ?>	
						</tbody>
					</table>
</div>