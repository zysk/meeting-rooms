import MeetingLinks from "../meetingLinks";

const Card = (props) => {
    return (
        <>
            {props.type === "card" && (
                <div
                    className={`p-5 rounded-2xl ${
                        props.type === "card"
                            ? "bg-white text-center shadow-xl transform hover:scale-110 duration-700"
                            : ""
                    }`}
                >
                    <img
                        src="/img/profile.jpeg"
                        alt="profile picture"
                        className={`h-16 w-16 rounded-full`}
                    />
                    <p>Shilpa</p>
                    <small>Designation</small>
                    <MeetingLinks />
                </div>
            )}

            {/* List view */}
            {props.type === "list" && <div>Hello</div>}
        </>
    );
};

export default Card;
