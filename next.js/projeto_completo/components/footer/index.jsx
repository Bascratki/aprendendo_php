import Link from "next/link";
import Image from "next/image";
import Styles from "./footer.module.scss";
import Logo from "/public/images/logoAgencia.svg";
import iconInstagram from "/public/images/iconInstagram.svg";
import iconFacebook from "/public/images/iconFacebook.svg";
import iconLinkedIn from "/public/images/iconLinkedIn.svg";
import iconYoutube from "/public/images/iconYoutube.svg";

const Footer = () => {
  return (
    <div className={Styles.container}>
      <div className={`${Styles.column} ${Styles.columnPrincipal}`}>
        <Image src={Logo} alt="Logo" />
        <h1 className={Styles.title}>0800 800 800</h1>
        <p>comercial@agencia.com.br</p>
      </div>
      <div className={Styles.column}>
        <h1>MENU</h1>
        <p>Quem somos</p>
        <p>Cases</p>
      </div>
      <div className={Styles.column}>
        <h1>CONTEÚDO</h1>
        <p>E-books</p>
        <p>Fórmulas prontas</p>
      </div>
      <div className={`${Styles.column} ${Styles.alignRight}`}>
        <h1>SOCIAL</h1>
        <div className={Styles.icons}>
          <Link href="/">
            <Image
              src={iconInstagram}
              alt="Instagram"
              className={Styles.icon}
            />
          </Link>
          <Link href="/">
            <Image src={iconFacebook} alt="Facebook" className={Styles.icon} />
          </Link>
          <Link href="/">
            <Image src={iconLinkedIn} alt="LinkeIn" className={Styles.icon} />
          </Link>
          <Link href="/">
            <Image src={iconYoutube} alt="Youtube" className={Styles.icon} />
          </Link>
        </div>
      </div>
      <div className={Styles.allRightReserved}>
        {" "}
        ©2022 AGÊNCIA. Todos os direitos reservados.
      </div>
    </div>
  );
};

export default Footer;
