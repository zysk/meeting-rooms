import Contacts from "../../components/contacts";
import Heading from "../../components/Heading";
import Layout from "../../layouts";
import Search from "../../components/Seach";

const Home = () => {
    return (
        <Layout>
            <Search />
            <Heading content="Freequently accessed contacts" />

            <Contacts type="card" />

            <Heading content="All contacts" />

            <Contacts type="list" />
        </Layout>
    );
};

export default Home;
