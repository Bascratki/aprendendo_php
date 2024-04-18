import Styles from './welcome.module.scss'
import Button from '../button/index'
import BannerWelcome from '/public/images/bannerWelcome.png'
import Image from 'next/image'

const Welcome = () => {
	return (
		<div className={Styles.container}>
			<div className={Styles.text}>
				<h1>Melhor agência de marketingdo bairro</h1>
				<p>
					Somos umas agência de marketing digital focada em resultados. Ajudamos
					empresas a crescerem na internet.
				</p>
				<Button
					title='Aumentar vendas'
					kind='secundary'
				/>
			</div>
			<div className={Styles.image}>
				<Image
					src={BannerWelcome}
					alt='Banner Welcome'
				/>
			</div>
			<div className={Styles.animation}>
				{/* Add your animation component here */}
			</div>
		</div>
	)
}

export default Welcome
