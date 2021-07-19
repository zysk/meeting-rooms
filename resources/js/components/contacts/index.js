import Card from "./card";

const Contacts = (props) => {
    return (
        <>
            {/* if type is card, show 4 cards in a row */}
            {props.type === "card" && (
                <div className="grid grid-cols-4 gap-4">
                    <Card type={props.type} />
                    <Card type={props.type} />
                    <Card type={props.type} />
                    <Card type={props.type} />
                </div>
            )}

            {/* If type is list, then show contacts in list format */}
            {props.type === "list" && (
                <ul>
                    <Card type={props.type} />
                    <Card type={props.type} />
                </ul>
            )}
        </>
    );
};

export default Contacts;
