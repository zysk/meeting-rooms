import { Link } from "@inertiajs/inertia-react";

const Sidebar = () => {
    return (
        <>
            <Link className="block pb-8" href="/">
                <img
                    className="w-full"
                    alt="Company logo"
                    src="/img/zysk-technologies.png"
                />
            </Link>
            <Link className="block pb-8" href="/">
                Home
            </Link>
            <Link className="block pb-8" href="/">
                About
            </Link>
            <Link className="block pb-8" href="/">
                Services
            </Link>
            <Link className="block pb-8" href="/">
                Contact
            </Link>
        </>
    );
};

export default Sidebar;
