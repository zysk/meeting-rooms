const Search = (props) => {
    return (
        <div className="mb-8">
            <form>
                <div>
                    <label className="sr-only focus:not-sr-only">
                        Search name
                    </label>
                    <input type="text" className="w-full rounded-3xl p-2" />
                </div>
            </form>
        </div>
    );
};

export default Search;
