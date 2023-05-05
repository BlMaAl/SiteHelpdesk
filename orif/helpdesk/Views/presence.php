<?php
/**
 * welcome_message view
 *
 * @author      Orif (BlAl)
 * @link        https://github.com/OrifInformatique
 * @copyright   Copyright (c), Orif (https://www.orif.ch)
 */
?>

<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th, td {
		padding: 8px;
		text-align: center;
		border: 1px solid #ddd;
	}

	thead tr:nth-child(1) th {
		text-align: center;
		font-size: 20px;
		font-weight: bold;
	}

	thead tr:nth-child(2) th {
		font-weight: bold;
	}

	tbody tr:nth-child(even) {
		background-color: #f2f2f2;
	}

	.week {
		background-color: #eee;
		padding: 8px;
		font-size: 18px;
		text-align: center;
	}

	.bg-green {
		background-color: #c5deb5;
	}

	.bg-yellow {
		background-color: #e5f874;
	}

	.bg-orange {
		background-color: #ffd965;
	}

  
</style>

<div class="container-fluid">

	<a class="btn btn-primary mb-3" href="<?=base_url('helpdesk/home')?>">Retour</a>

  	
	<!-- lundi -->
	<table class="table-responsive position-relative">
		<thead>
			<tr>
				<th colspan="4">Lundi</th>
			</tr>
			<tr>
				<th>8:00 10:00</th>
				<th>10:00 12:00</th>
				<th>12:45 15:00</th>
				<th>15:00 16:57</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<!-- lundi 8:00 10:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_debut_matin" id="lundi_debut_matin1">
						<label class="form-check-label" for="lundi_debut_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_debut_matin" id="lundi_debut_matin2">
						<label class="form-check-label" for="lundi_debut_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_debut_matin" id="lundi_debut_matin3">
						<label class="form-check-label" for="lundi_debut_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- lundi 10:00 12:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_fin_matin" id="lundi_fin_matin1">
						<label class="form-check-label" for="lundi_fin_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_fin_matin" id="lundi_fin_matin2">
						<label class="form-check-label" for="lundi_fin_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_fin_matin" id="lundi_fin_matin3">
						<label class="form-check-label" for="lundi_fin_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- lundi 12:45 15:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_debut_apres-midi" id="lundi_debut_apres-midi1">
						<label class="form-check-label" for="lundi_debut_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_debut_apres-midi" id="lundi_debut_apres-midi2">
						<label class="form-check-label" for="lundi_debut_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_debut_apres-midi" id="lundi_debut_apres-midi3">
						<label class="form-check-label" for="lundi_debut_apres-midi3">
							pas present
						</label>
					</div>
				</td>
				<!-- lundi 15:00 16:57 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_fin_apres-midi" id="lundi_fin_apres-midi1">
						<label class="form-check-label" for="lundi_fin_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_fin_apres-midi" id="lundi_fin_apres-midi2">
						<label class="form-check-label" for="lundi_fin_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="lundi_fin_apres-midi" id="lundi_fin_apres-midi3">
						<label class="form-check-label" for="lundi_fin_apres-midi3">
							pas present
						</label>
					</div>
				</td>
			</tr>
			
		</tbody>
	</table>
	<!-- mardi -->
	<table class="table-responsive position-relative">
		<thead>
			<tr>
				<th colspan="4">Mardi</th>
			</tr>
			<tr>
				<th>8:00 10:00</th>
				<th>10:00 12:00</th>
				<th>12:45 15:00</th>
				<th>15:00 16:57</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<!-- mardi 8:00 10:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_debut_matin" id="mardi_debut_matin1">
						<label class="form-check-label" for="mardi_debut_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_debut_matin" id="mardi_debut_matin2">
						<label class="form-check-label" for="mardi_debut_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_debut_matin" id="mardi_debut_matin3">
						<label class="form-check-label" for="mardi_debut_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- mardi 10:00 12:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_fin_matin" id="mardi_fin_matin1">
						<label class="form-check-label" for="mardi_fin_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_fin_matin" id="mardi_fin_matin2">
						<label class="form-check-label" for="mardi_fin_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_fin_matin" id="mardi_fin_matin3">
						<label class="form-check-label" for="mardi_fin_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- mardi 12:45 15:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_debut_apres-midi" id="mardi_debut_apres-midi1">
						<label class="form-check-label" for="mardi_debut_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_debut_apres-midi" id="mardi_debut_apres-midi2">
						<label class="form-check-label" for="mardi_debut_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_debut_apres-midi" id="mardi_debut_apres-midi3">
						<label class="form-check-label" for="mardi_debut_apres-midi3">
							pas present
						</label>
					</div>
				</td>
				<!-- mardi 15:00 16:57 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_fin_apres-midi" id="mardi_fin_apres-midi1">
						<label class="form-check-label" for="mardi_fin_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_fin_apres-midi" id="mardi_fin_apres-midi2">
						<label class="form-check-label" for="mardi_fin_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mardi_fin_apres-midi" id="mardi_fin_apres-midi3">
						<label class="form-check-label" for="mardi_fin_apres-midi3">
							pas present
						</label>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<!-- mercredi -->
	<table class="table-responsive position-relative">
		<thead>
			<tr>
				<th colspan="4">Mercredi</th>
			</tr>
			<tr>
				<th>8:00 10:00</th>
				<th>10:00 12:00</th>
				<th>12:45 15:00</th>
				<th>15:00 16:57</th>
			</tr>
		</thead>
		<tbody>
			<!-- mercredi 8:00 10:00 -->
			<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_debut_matin" id="mercredi_debut_matin1">
						<label class="form-check-label" for="mercredi_debut_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_debut_matin" id="mercredi_debut_matin2">
						<label class="form-check-label" for="mercredi_debut_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_debut_matin" id="mercredi_debut_matin3">
						<label class="form-check-label" for="mercredi_debut_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- mercredi 10:00 12:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_fin_matin" id="mercredi_fin_matin1">
						<label class="form-check-label" for="mercredi_fin_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_fin_matin" id="mercredi_fin_matin2">
						<label class="form-check-label" for="mercredi_fin_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_fin_matin" id="mercredi_fin_matin3">
						<label class="form-check-label" for="mercredi_fin_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- mercredi 12:45 15:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_debut_apres-midi" id="mercredi_debut_apres-midi1">
						<label class="form-check-label" for="mercredi_debut_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_debut_apres-midi" id="mercredi_debut_apres-midi2">
						<label class="form-check-label" for="mercredi_debut_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_debut_apres-midi" id="mercredi_debut_apres-midi3">
						<label class="form-check-label" for="mercredi_debut_apres-midi3">
							pas present
						</label>
					</div>
				</td>
				<!-- mercredi 15:00 16:57 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_fin_apres-midi" id="mercredi_fin_apres-midi1">
						<label class="form-check-label" for="mercredi_fin_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_fin_apres-midi" id="mercredi_fin_apres-midi2">
						<label class="form-check-label" for="mercredi_fin_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="mercredi_fin_apres-midi" id="mercredi_fin_apres-midi3">
						<label class="form-check-label" for="mercredi_fin_apres-midi3">
							pas present
						</label>
					</div>
				</td>
		</tbody>
	</table>
	<!-- jeudi -->
	<table class="table-responsive position-relative">
		<thead>
			<tr>
				<th colspan="4">Jeudi</th>
			</tr>
			<tr>
				<th>8:00 10:00</th>
				<th>10:00 12:00</th>
				<th>12:45 15:00</th>
				<th>15:00 16:57</th>
			</tr>
		</thead>
		<tbody>
			<!-- jeudi 8:00 10:00 -->
			<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_debut_matin" id="jeudi_debut_matin1">
						<label class="form-check-label" for="jeudi_debut_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_debut_matin" id="jeudi_debut_matin2">
						<label class="form-check-label" for="jeudi_debut_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_debut_matin" id="jeudi_debut_matin3">
						<label class="form-check-label" for="jeudi_debut_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- jeudi 10:00 12:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_fin_matin" id="jeudi_fin_matin1">
						<label class="form-check-label" for="jeudi_fin_matin1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_fin_matin" id="jeudi_fin_matin2">
						<label class="form-check-label" for="jeudi_fin_matin2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_fin_matin" id="jeudi_fin_matin3">
						<label class="form-check-label" for="jeudi_fin_matin3">
							pas present
						</label>
					</div>
				</td>
				<!-- jeudi 12:45 15:00 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_debut_apres-midi" id="jeudi_debut_apres-midi1">
						<label class="form-check-label" for="jeudi_debut_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_debut_apres-midi" id="jeudi_debut_apres-midi2">
						<label class="form-check-label" for="jeudi_debut_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_debut_apres-midi" id="jeudi_debut_apres-midi3">
						<label class="form-check-label" for="jeudi_debut_apres-midi3">
							pas present
						</label>
					</div>
				</td>
				<!-- jeudi 15:00 16:57 -->
				<td>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_fin_apres-midi" id="jeudi_fin_apres-midi1">
						<label class="form-check-label" for="jeudi_fin_apres-midi1">
							present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_fin_apres-midi" id="jeudi_fin_apres-midi2">
						<label class="form-check-label" for="jeudi_fin_apres-midi2">
							peu present
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jeudi_fin_apres-midi" id="jeudi_fin_apres-midi3">
						<label class="form-check-label" for="jeudi_fin_apres-midi3">
							pas present
						</label>
					</div>
				</td>
		</tbody>
	</table>
	<!-- vendredi -->
	<table class="table-responsive position-relative">
		<thead>
			<tr>
			<th colspan="4">Vendredi</th>
			</tr>
			<tr>
				<th>8:00 10:00</th>
				<th>10:00 12:00</th>
				<th>12:45 15:00</th>
				<th>15:00 16:57</th>
			</tr>
		</thead>
		<tbody>
			<!-- vendredi 8:00 10:00 -->
			<td>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_debut_matin" id="vendredi_debut_matin1">
					<label class="form-check-label" for="vendredi_debut_matin1">
						present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_debut_matin" id="vendredi_debut_matin2">
					<label class="form-check-label" for="vendredi_debut_matin2">
						peu present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_debut_matin" id="vendredi_debut_matin3">
					<label class="form-check-label" for="vendredi_debut_matin3">
						pas present
					</label>
				</div>
			</td>
			<!-- vendredi 10:00 12:00 -->
			<td>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_fin_matin" id="vendredi_fin_matin1">
					<label class="form-check-label" for="vendredi_fin_matin1">
						present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_fin_matin" id="vendredi_fin_matin2">
					<label class="form-check-label" for="vendredi_fin_matin2">
						peu present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_fin_matin" id="vendredi_fin_matin3">
					<label class="form-check-label" for="vendredi_fin_matin3">
						pas present
					</label>
				</div>
			</td>
			<!-- vendredi 12:45 15:00 -->
			<td>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_debut_apres-midi" id="vendredi_debut_apres-midi1">
					<label class="form-check-label" for="vendredi_debut_apres-midi1">
						present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_debut_apres-midi" id="vendredi_debut_apres-midi2">
					<label class="form-check-label" for="vendredi_debut_apres-midi2">
						peu present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_debut_apres-midi" id="vendredi_debut_apres-midi3">
					<label class="form-check-label" for="vendredi_debut_apres-midi3">
						pas present
					</label>
				</div>
			</td>
			<!-- vendredi 15:00 16:57 -->
			<td>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_fin_apres-midi" id="vendredi_fin_apres-midi1">
					<label class="form-check-label" for="vendredi_fin_apres-midi1">
						present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_fin_apres-midi" id="vendredi_fin_apres-midi2">
					<label class="form-check-label" for="vendredi_fin_apres-midi2">
						peu present
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="vendredi_fin_apres-midi" id="vendredi_fin_apres-midi3">
					<label class="form-check-label" for="vendredi_fin_apres-midi3">
						pas present
					</label>
				</div>
			</td>
		</tbody>
	</table>
	
</div>
