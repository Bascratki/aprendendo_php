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

				<input
					type='text'
					placeholder='Nome completo'
				></input>

				<input
					type='email'
					placeholder='Email profissional'
				></input>

				<input
					type='text'
					placeholder='Celular/WhatsaApp'
				></input>

				<input
					type='text'
					placeholder='Site'
				></input>

				<input
					type='select'
					placeholder='Orçamento para mídia'
				></input>

				<Button title='Enviar ' />
			</div>
		</div>
	)
}

export default Contato
