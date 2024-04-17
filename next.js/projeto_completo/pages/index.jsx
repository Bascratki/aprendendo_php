import Header from '../components/Header'
import Welcome from '../components/Welcome'
import Styles from '../pages/Home.module.scss'

export default function Home() {
	return (
		<div className={Styles.container}>
			<Header />
			<Welcome />
		</div>
	)
}
