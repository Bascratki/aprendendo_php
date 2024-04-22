import Button from '../button/index.jsx'
import Styles from './contato.module.scss'

const Contato = () => {
	return (
		<div className={Styles.container}>
			<div className={Styles.texts}>
				<span>ENTRE EM CONTATO</span>
				<h1>Aumente seu resultado de vendas e performance</h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting
					industry. Lorem Ipsum has been the industry's standard dummy
				</p>
			</div>
			<div className={Styles.forms}>
				<h1>Fale com um especialista</h1>

				<form>
					<input
						type='text'
						placeholder='Nome completo'
						required
					></input>
					<input
						type='email'
						placeholder='Email profissional'
						pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}'
						required
					></input>
					<input
						type='text'
						placeholder='Ex: (11) 99999-9999'
						pattern='^\(\d{2}\) \d{5}-\d{4}$'
						required
					></input>
					<input
						type='text'
						placeholder='Site'
						required
					></input>
					<select
						name='select'
						id='select'
						required
					>
						<option value=''>Selecione uma opção</option>
						<option value='1'>Instagram</option>
						<option value='2'>Facebook</option>
					</select>

					<Button title='Enviar ' />
				</form>
			</div>
		</div>
	)
}

export default Contato
