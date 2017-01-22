<form class="formConsulta" id="form_contato" action="<?php echo site_url("home/sendEmail") ?>">
	<input type="hidden" name="token_rdstation" value="ae7d4ae17482072d92d7e9e6f90c58a2">
	<input type="hidden" name="identificador" value="cadastro">
	<div class="label-cnt-form">
		<div class="cntForm">
			<label>
				<input type="text" placeholder="Nome" name="nome">
			</label>
			<label>
				<input type="text" placeholder="email" name="email">
			</label>
			<label>
				<input type="text" placeholder="Celular" name="celular">
			</label>
			<label>
				<select name="Idade e sexo">
					<option value="">Qual a sua idade e sexo?"</option>
					<option value="Feminino - Entre 18 a 25 anos">Feminino - Entre 18 a 25 anos</option>
					<option value="Feminino - Entre 26 a 40 anos">Feminino - Entre 26 a 40 anos</option>
					<option value="Feminino - Entre 41 a 55 anos">Feminino - Entre 41 a 55 anos</option>
					<option value="Masculino - Todas as idades">Masculino - Todas as idades</option>
				</select>
			</label>
		</div>
		<div class="cntForm">
			<label>
				<select name="Problemas Relacionados">
					<option>Qual o problema que deseja tratar?</option>
					<?php foreach ($head_problems->list as $problem): ?>
						<option value="<?php echo $problem->title ?>"><?php echo $problem->title ?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				<select>
					<option name="Tratamentos Relacionados">Qual o tratamento indicado?</option>
					<?php foreach ($head_tratamentos->list as $treatment): ?>
						<option value="<?php echo $treatment->title ?>"><?php echo $treatment->title ?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				<select name="custom_fields[113660]">
					<option value="">Dia de preferência</option>
					<option value="Segunda">Segunda</option>
					<option value="Terça">Terça</option>
					<option value="Quarta">Quarta</option>
					<option value="Quinta">Quinta</option>
					<option value="Sexta">Sexta</option>
				</select>
			</label>
			<label>
				<select name="custom_fields[113661]"><option value="">Selecione</option>
					<option value="">Horário de preferência</option>
					<option value="09:30">09:30</option>
					<option value="10:30">10:30</option>
					<option value="11:30">11:30</option>
					<option value="12:30">12:30</option>
					<option value="13:30">13:30</option>
					<option value="14:30">14:30</option>
					<option value="15:30">15:30</option>
					<option value="16:30">16:30</option>
					<option value="17:30">17:30</option>
					<option value="18:30">18:30</option>
					<option value="19:30">19:30</option>
				</select>
			</label>
		</div>
	</div>
	<div class="bt-cnt-submit">
		<input type="submit" value="ENVIAR" class="lkMais">
	</div>
</form>
