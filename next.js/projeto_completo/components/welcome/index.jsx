import Styles from './welcome.module.scss'; 
import Button from '../button/index';

const Welcome = () => {
    return <div className={Styles.container}>
        <div className={Styles.text}>
            <h1>Melhor agência de marketingdo bairro</h1>
            <p>Somos umas agência de marketing digital focada em resultados. Ajudamos empresas a crescerem na internet.</p>
            <Button title='Aumentar vendas' />
        </div>
        <div className={Styles.imges}></div>
    </div>
}

export default Welcome;