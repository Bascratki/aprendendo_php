import Styles from './button.module.scss'

/**
 * Props
 * title: string
 * kind: "primary" | "secondary"
 */

const Button = ({title, kind}) => {
    return <button className={Styles.button}>{title}</button>
}

export default Button;