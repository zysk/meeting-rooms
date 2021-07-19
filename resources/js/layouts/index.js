import Sidebar from "./sidebar";

const Layout = (props) => {
    return (
        <section className="layout h-screen">
            <div className="container p-5 my-5">
                <div className="max-w-4xl mx-auto bg-red-50 rounded-3xl">
                    <div className="grid grid-cols-4 gap-4 h-5/6 ">
                        {/* Sidebar */}
                        <div className="... bg-white p-8 rounded-l-3xl">
                            <Sidebar />
                        </div>

                        {/* Main content */}
                        <div className="col-span-3 p-8">{props.children}</div>
                    </div>
                </div>
            </div>
        </section>
    );
};

export default Layout;
