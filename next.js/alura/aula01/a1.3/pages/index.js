import Link from "next/link";
function HomePage() {
  return (
    <div>
      Welcome to Next.js!
      <img src="/images/avatar.png" />
      <ul>
        <li>
          <Link href="/sobre">Ir para a Sobre</Link>
        </li>
      </ul>
    </div>
  );
}

export default HomePage;
