import Link from 'next/link'
import Styles from './contato.module.scss'
import Button from '../button'
import Input from '../input'
import Select from '../select'

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
					<Input
						type='text'
						placeholder='Nome completo'
						required
					></Input>
					<Input
						type='email'
						placeholder='Email profissional'
						pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}'
						required
					></Input>
					<Input
						type='text'
						placeholder='Ex: (11) 99999-9999'
						pattern='^\(\d{2}\) \d{5}-\d{4}$'
						required
					></Input>
					<Input
						type='text'
						placeholder='Site'
						required
					></Input>
					<Select
						placeholder='Selecione o segmento'
						options={[
							{ value: '1', label: 'Tecnologia' },
							{ value: '2', label: 'Saúde' },
							{ value: '3', label: 'Educação' },
							{ value: '4', label: 'Varejo' }
						]}
						required
					></Select>

					<Button
						title='Enviar '
						kind='full'
					/>
				</form>
			</div>
			<div className={Styles.footer}>
				<p>
					Ao enviar esse formulário, você reconhece que leu e concordacom a
					nossa
					<Link href='http://google.com'>
						<span> Política de Privacidade</span>
					</Link>
				</p>
			</div>
		</div>
	)
}

export default Contato
